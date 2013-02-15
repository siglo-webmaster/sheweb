<?php

class CargasexcelController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

        static $_permissionControl = array( 'read'=>'Consultar',
                                            'write' => 'Crear o Actializar', 
                                            'admin'=>'Administrar');
        
	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'userGroupsAccessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				 'pbac'=>array('read'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'pbac'=>array('write'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'pbac'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}


	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate($id)
	{
		$model=new Cargasexcel;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Cargasexcel']))
		{
			$model->attributes=$_POST['Cargasexcel'];
                        $model->usergroups_user_id = Yii::app()->user->id;
                        $model->fecha = date("Y-m-d h:i:s");
                        
			//if($model->save()){
                            
                        $files_uploades = CUploadedFile::getInstancesByName('file');

                        if(!is_dir("uploadedfiles/pedidosproveedoresdocumentoscargasitems/".$model->pedidosproveedores_idpedidosproveedores)){
                            if(!mkdir("uploadedfiles/pedidosproveedoresdocumentoscargasitems/".$model->pedidosproveedores_idpedidosproveedores)){
                                die("No pudo crearse la carpeta de archivos " ."uploadedfiles/pedidosproveedoresdocumentoscargasitems/".$model->pedidosproveedores_idpedidosproveedores);
                            }
                        }
                        
                                                
                        foreach ($files_uploades as $image => $pic) {
                           // $cargasexcel=new Cargasexcel();//CARGAR MODELO 
                            //$model->pedidosproveedores_idpedidosproveedores = $model->pedidosproveedores_idpedidosproveedores; //OBTENER LLAVE FORANEA  
                            $pic->saveAs("uploadedfiles/pedidosproveedoresdocumentoscargasitems/".$model->pedidosproveedores_idpedidosproveedores."/".$pic->name);
                            $model->file="uploadedfiles/pedidosproveedoresdocumentoscargasitems/".$model->pedidosproveedores_idpedidosproveedores."/".$pic->name;
                            
                            if($model->save()){
                                $campos = array(
                                        0=>'titulo',
                                        1=>'isbn',
                                        2=>'year',
                                        3=>'numeroedicion',
                                        4=>'formato',
                                        5=>'categoria',
                                        6=>'autor',
                                        7=>'precio',
                                        8=>'moneda',
                                        9=>'descripcion'
                                    );
                                
                                $datos = $this->cargarExcel($model->file);
                                echo "<table border=1>";
                                foreach($datos as $row){
                                    echo "<tr>";
                                    foreach($campos as $col){
                                        echo "<td>".$row[$col]."</td>";
                                    }
                                    echo "</tr>";
                                }
                                echo "</table>";
                                exit(0);
                                $this->redirect(array('view','id'=>$model->idcargasexcel));
                            }
                            //unset($cargasexcel);
                        }



                        
                      //  }
				
		}

		$this->render('create',array(
			'model'=>$model,
                        'pedidosproveedores_idpedidosproveedores'=>$id,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Cargasexcel']))
		{
			$model->attributes=$_POST['Cargasexcel'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->idcargasexcel));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Cargasexcel');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Cargasexcel('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Cargasexcel']))
			$model->attributes=$_GET['Cargasexcel'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Cargasexcel::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='cargasexcel-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
        
        
        /*Funcion de carga de archivo excel*/
        public function cargarExcel($file,$campos=false){
   
        require_once 'Excel/reader.php';

        if(!$campos){
            $campos = array(
                0=>'titulo',
                1=>'isbn',
                2=>'year',
                3=>'numeroedicion',
                4=>'formato',
                5=>'categoria',
                6=>'autor',
                7=>'precio',
                8=>'moneda',
                9=>'descripcion'
            );
        }


        $data = new Spreadsheet_Excel_Reader();
        $data->setOutputEncoding('UTF-8');

        $data->read($file);

        $carga = array();
        for ($i = 1; $i <= $data->sheets[0]['numRows']; $i++) {

                for ($j = 1; $j <= $data->sheets[0]['numCols']; $j++) {
                        $carga[$i - 1][$campos[$j-1]] = (isset($data->sheets[0]['cells'][$i][$j]))?$data->sheets[0]['cells'][$i][$j]:'';
                }
        }

        return $carga;

    }
}
