<?php

class TercerosController extends Controller
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
	public function actionCreate()
	{
		$model=new Terceros;
                $terceros_has_moneda = new TercerosHasMoneda;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
                $terceros_has_tiposterceros = new TercerosHasTiposterceros;
                
		if(isset($_POST['Terceros']))
		{
			$model->attributes=$_POST['Terceros'];
			if($model->save()){
                            
                            //relacion con tipos de Tercero
                            if(isset($_POST['terceros_has_tiposterceros'])){
                                if(is_array($_POST['terceros_has_tiposterceros'] )){
                                    foreach($_POST['terceros_has_tiposterceros'] as $idtipotercero){
                                        $tercerohastipotercero =  new TercerosHasTiposterceros;
                                        $tercerohastipotercero->terceros_idterceros = $model->idterceros;
                                        $tercerohastipotercero->tiposterceros_idtiposterceros = $idtipotercero;
                                        if (!$tercerohastipotercero->save()){
                                            print_r($tercerohastipotercero->errors);
                                            yii::app()->end();
                                        }
                                        
                                     }
                                }
                                   
                            }
                            
                            
                            //relacion con tipos de moneda
                            if(isset($_POST['terceros_has_moneda'])){
                                if(is_array($_POST['terceros_has_moneda'] )){
                                    foreach($_POST['terceros_has_moneda'] as $idtipomoneda){
                                        $tercerohastipomoneda =  new TercerosHasMoneda;
                                        $tercerohastipomoneda->terceros_idterceros = $model->idterceros;
                                        $tercerohastipomoneda->moneda_idmoneda = $idtipomoneda;
                                        if (!$tercerohastipomoneda->save()){
                                            print_r($tercerohastipomoneda->errors);
                                            yii::app()->end();
                                        }
                                        
                                     }
                                }
                                   
                            }
                            
                            $this->redirect(array('view','id'=>$model->idterceros));
                        }
				
		}
                 
                
                
		$this->render('create',array(
			'model'=>$model,
                        'terceros_has_tiposterceros'=>$terceros_has_tiposterceros,
                        'terceros_has_moneda'=>$terceros_has_moneda,
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
                $terceros_has_moneda = new TercerosHasMoneda;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		$terceros_has_tiposterceros = new TercerosHasTiposterceros;
                
		if(isset($_POST['Terceros']))
		{
			$model->attributes=$_POST['Terceros'];
			if($model->save()){
                            
                            //relacion con tipos de Tercero
                             $terceros_has_tiposterceros->deleteAllByAttributes(array('terceros_idterceros'=>$model->idterceros));
                            if(isset($_POST['terceros_has_tiposterceros'])){
                                if(is_array($_POST['terceros_has_tiposterceros'] )){
                                    foreach($_POST['terceros_has_tiposterceros'] as $idtipotercero){
                                        $tercerohastipotercero =  new TercerosHasTiposterceros;
                                        $tercerohastipotercero->terceros_idterceros = $model->idterceros;
                                        $tercerohastipotercero->tiposterceros_idtiposterceros = $idtipotercero;
                                        if (!$tercerohastipotercero->save()){
                                            print_r($tercerohastipotercero->errors);
                                            yii::app()->end();
                                        }
                                        
                                     }
                                } 
                                   
                            }
                            
                            
                             //relacion con tipos de moneda
                            $terceros_has_moneda->deleteAllByAttributes(array('terceros_idterceros'=>$model->idterceros));
                            if(isset($_POST['terceros_has_moneda'])){
                                if(is_array($_POST['terceros_has_moneda'] )){
                                    foreach($_POST['terceros_has_moneda'] as $idtipomoneda){
                                        $tercerohastipomoneda =  new TercerosHasMoneda;
                                        $tercerohastipomoneda->terceros_idterceros = $model->idterceros;
                                        $tercerohastipomoneda->moneda_idmoneda = $idtipomoneda;
                                        if (!$tercerohastipomoneda->save()){
                                            print_r($tercerohastipomoneda->errors);
                                            yii::app()->end();
                                        }
                                        
                                     }
                                }
                                   
                            }
                            $this->redirect(array('view','id'=>$model->idterceros));
                        }
				
		}

                
               //Get listado de tipos de terceros
               $sql = "select distinct tiposterceros_idtiposterceros   from terceros_has_tiposterceros where terceros_idterceros='".$id."'" ;               
                $tiposterceros = Yii::app()->db->createCommand($sql)->queryAll();
                if(is_array($tiposterceros)){
                    $form=array();
                    foreach($tiposterceros as $row){
                        $form[]=$row['tiposterceros_idtiposterceros'];
                    }
                }else{
                    $row=null;
                }
               
                //Get listado de tipos de monedas
               $sql = "select distinct moneda_idmoneda   from terceros_has_moneda where terceros_idterceros='".$id."'" ;               
                $tiposmoneda = Yii::app()->db->createCommand($sql)->queryAll();
                if(is_array($tiposmoneda)){
                    $moneda=array();
                    foreach($tiposmoneda as $row){
                        $moneda[]=$row['moneda_idmoneda'];
                    }
                }else{
                    $row=null;
                }
                
		$this->render('update',array(
			'model'=>$model,
                        'terceros_has_tiposterceros'=>$form,
                        'terceros_has_moneda'=>$moneda,
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
		$dataProvider=new CActiveDataProvider('Terceros');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Terceros('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Terceros']))
			$model->attributes=$_GET['Terceros'];

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
		$model=Terceros::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='terceros-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
