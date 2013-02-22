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
                        
			$transaction = Yii::app()->db->beginTransaction(); // INICIAR TRANSACCION
                        try{

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
                                    $fechacreacion=date('Y-m-d h:i:s');
                                    $campos = array(
                                            0=>'titulo',
                                            1=>'isbn',
                                            2=>'year',
                                            3=>'numeroedicion',
                                            4=>'formato',
                                            5=>'editorial',
                                            6=>'autor',
                                            7=>'precio',
                                            8=>'moneda',
                                            9=>'descripcion',
                                            10=>'condicioncomercial',
                                            11=>'idproyectosespeciales',
                                        );

                                    $datos = $this->cargarExcel($model->file,$campos);

                                    foreach($datos as $row){
                                          
                                        

                                        $row['editorial'] = utf8_encode(strtoupper($row['editorial']));

                                        //REVISAR SI SE REQUIERE CREAR LA EDITORIAL
                                        $sql = "select * from editorial 
                                             where nombre ='".$row['editorial']."'";               
                                        $editorial = Yii::app()->db->createCommand($sql)->queryAll();
                                        if(!$editorial){
                                            $editorial = new Editorial;
                                            $editorial->nombre = $row['editorial'];
                                            $editorial->estado='activo';
                                            
                                            $editorial->save();

                                            $ideditorial = $editorial->ideditorial;
                                            unset($editorial);

                                        }else{

                                            $ideditorial = $editorial[0]['ideditorial'];
                                        }



                                        //FIN REVISAR SI SE REQUIERE CREAR LA EDITORIAL


                                        ///REVISAR CARGA DE AUTORES /////

                                        $autores = explode(';',$row['autor']);
                                        $idautor=array();
                                        if(sizeof($autores>0)){

                                            foreach($autores as $aut){
                                                if($aut!=''){
                                                    /////
                                                        $aut = utf8_encode(strtoupper($aut));
                                                        $sql = "select * from autor 
                                                            where nombre ='".$aut."'";               
                                                       $tempaut = Yii::app()->db->createCommand($sql)->queryAll();
                                                       if(!$tempaut){
                                                           unset($tempaut);
                                                           $tempaut = new Autor;
                                                           $tempaut->nombre = $aut;
                                                           $tempaut->estado='activo';

                                                           $tempaut->save();


                                                           $idautor[] = $tempaut->idautor;


                                                       }else{

                                                           $idautor[] = $tempaut[0]['idautor'];
                                                       }

                                                    //////
                                                }
                                            }

                                        }

                                        ////FIN REVISAR CARGA DE AUTORES ////

                                        /////COMPROBAR SI EL ISBN EXISTE SI NO EXISTE CREA EL ITEM////////
                                        $sql = "select * from item
                                             where isbn ='".$row['isbn']."'";               
                                        $item = Yii::app()->db->createCommand($sql)->queryAll();
                                        if(!$item){
                                            $newitem = new Item;
                                            $newitem->nombre = utf8_encode($row['titulo']);
                                            $newitem->isbn = $row['isbn'];
                                            $newitem->fechaedicion = $row['year']."-01-01";
                                            $newitem->numeroedicion = $row['numeroedicion'];
                                            $newitem->editorial_ideditorial = $ideditorial;
                                            $newitem->temporal = 1;
                                            $newitem->fechacreacion = $fechacreacion;
                                            $newitem->barcode = $row['isbn'];
                                            $newitem->descripcion = utf8_encode($row['descripcion']);
                                            $estado='activo';

                                            $newitem->save();
                                            
                                            $iditem = $newitem->iditem;
                                        }else{

                                            $iditem = $item[0]['iditem'];
                                        }

                                        //// FIN CREACION DEL ITEM
                                        /// A ESTA ALTURA TENEMOS LAS VARIABLES: 
                                        //// $ideditorial, $idautor[], $iditem
                                        //// AQU INICIAMOS A DESARROLLLAR LAS RELACIONES DEL ITEM
                                        $itemformato = new ItemHasTipoformato;
                                        $itemformato->item_iditem = $iditem;
                                        $itemformato->tipoformato_idtipoformato = $row['formato'];

                                        //COMPROVAR SI EL FORMATO YA ESTABA ASOCIADO AL LIBRO
                                        $existe = ItemHasTipoformato::model()->find('item_iditem = ? AND tipoformato_idtipoformato = ?', array($itemformato->item_iditem, $itemformato->tipoformato_idtipoformato));
                                        if(!$existe){
                                            $itemformato->save();
                                        }
                                        /////FIN ASOCIACION DEL ITEM AL FORMATO

                                        ///////////ASOCIACION A LOS AUTORES///////////
                                        foreach($idautor as $us_autor){
                                            $existe = ItemHasAutor::model()->find('item_iditem = ? AND autor_idautor = ?', array($iditem, $us_autor));
                                            if(!$existe){
                                                $itemhasautor = new ItemHasAutor;
                                                $itemhasautor->item_iditem = $iditem;
                                                $itemhasautor->autor_idautor = $us_autor;
                                                
                                                $itemhasautor->save();
                                            }
                                        }
                                        unset($idautor);
                                        ////////FIN ASOCIACION A LOS AUTORES///////////
                                        $existe = ItemHasAutor::model()->find('item_iditem = ? AND autor_idautor = ?', array($iditem, $us_autor));
                                        if(!$existe){
                                            $itemhasautor = new ItemHasAutor;
                                            $itemhasautor->item_iditem = $iditem;
                                            $itemhasautor->autor_idautor = $us_autor;
                                            
                                            $itemhasautor->save();
                                        }
                                        /////////ASOCIACION A UN PRECIO/////////////////
                                        $moneda =  Moneda::model()->find('nombre = ?', array(strtoupper($row['moneda'])));
                                        if(!$moneda){
                                            echo "Fallo carga de moneda, se toma moneda por defectu";
                                            $moneda=1;
                                        }else{
                                            $moneda = $moneda->idmoneda;
                                        }


                                        $existe = Itemprecio::model()->find('item_iditem = ? AND moneda_idmoneda = ?', array($iditem, $moneda));
                                        if($existe){
                                           $existe->delete();
                                        }
                                        $precio = new Itemprecio;
                                        $precio->item_iditem = $iditem;
                                        $precio->moneda_idmoneda = $moneda;
                                        $precio->precio = $row['precio'];
                                        
                                        $precio->save();
                                        
                                        ////////FIN ASOCIACION A UN PRECIO//////////////


                                        //////ASOCIACION DEL ITEM AL PEDIDO ///////////
                                        ///AFECTAR TABLA PEDIDOSPROVEEDORESITEMS
                                        $pedidosproveedoresitems = new Pedidosproveedoresitems;
                                        $pedidosproveedoresitems->item_iditem = $iditem;
                                        $pedidosproveedoresitems->pedidosproveedores_idpedidosproveedores = $_POST['Cargasexcel']['pedidosproveedores_idpedidosproveedores'];
                                        $pedidosproveedoresitems->condicioncomercial_idcondicioncomercial = $row['condicioncomercial'];
                                        $pedidosproveedoresitems->proyectosespeciales_idproyectosespeciales = $row['idproyectosespeciales'];
                                        $pedidosproveedoresitems->chekeado=0;
                                        $pedidosproveedoresitems->solicitado=0;
                                        $pedidosproveedoresitems->confirmado=0;
                                        $pedidosproveedoresitems->recibido=0;
                                        $pedidosproveedoresitems->estado='activo';


                                        $pedidosproveedoresitems->save();

                                        //////FIN ASOCIACION DEL ITEM AL PEDIDO//////////

                                    }

                                }

                            }

                            $transaction->commit();
                            
                            

                    }catch (Exception $e){
                        $transaction->rollBack();
                        echo $e->getMessage();
                        exit(0);
                    }
                    
                    $this->redirect(Yii::app()->baseUrl."/PedidosProveedores/pedidosproveedores/view/id/".$_POST['Cargasexcel']['pedidosproveedores_idpedidosproveedores']); 
				
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
        public function cargarExcel($file,$campos){
   
        require_once 'Excel/reader.php';

        


        $data = new Spreadsheet_Excel_Reader();
        $data->setOutputEncoding('UTF-8');

        $data->read($file);

        $carga = array();
        for ($i = 1; $i <= $data->sheets[0]['numRows']; $i++) {

                for ($j = 1; $j <= $data->sheets[0]['numCols']; $j++) {
                        if(isset($campos[$j-1])){
                            $carga[$i - 1][$campos[$j-1]] = (isset($data->sheets[0]['cells'][$i][$j]))?$data->sheets[0]['cells'][$i][$j]:'';
                        }
                        
                }
        }

        return $carga;

    }
}
