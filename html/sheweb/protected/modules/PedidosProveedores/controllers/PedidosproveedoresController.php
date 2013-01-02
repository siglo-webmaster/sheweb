<?php

class PedidosproveedoresController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
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
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
                        array('allow', // allow authenticated user to perform 'additems'  action
				'actions'=>array('additems'),
				'users'=>array('@'),
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
		$pedidosproveedores=new Pedidosproveedores; //CARGAR MODELO 
                $pedidosproveedoresdocumentos=new Pedidosproveedoresdocumentos();//CARGAR MODELO 

		$this->performAjaxValidation(array($pedidosproveedores)); //VALIDACION DE CAMPOS MEDIANTE AJAX

		if(isset($_POST['Pedidosproveedores']))//CONFIRMAR SI HAY FORMULARIOS PARA SALVAR
		{
			$pedidosproveedores->attributes=$_POST['Pedidosproveedores']; // CARGAR ATRIBUTOS OBTENIDOS EN LOS FORMULARIOS
                        
                        
                        if($pedidosproveedores->validate()){ //VALIDAR CAMPOS DE EL MODELO
                            $transaction = Yii::app()->db->beginTransaction(); // INICIAR TRANSACCION
                            try{
                                    if($pedidosproveedores->isNewRecord){
                                        $pedidosproveedores->usuariocreacion=Yii::app()->user->id;
                                        $pedidosproveedores->fechacreacion=date("Y-m-d h:i:s");
                                        $pedidosproveedores->estado='activo';
                                    }
                                    
                                    $pedidosproveedores->save(); //GUARDAR ATRIBUTOS EN EL MODELO
                                    if(isset($_POST['Pedidosproveedoresdocumentos'])){
                                        
                                           
                                         $pedidosproveedoresdocumentos->attributes=$_POST['Pedidosproveedoresdocumentos'];  // CARGAR ATRIBUTOS OBTENIDOS EN LOS FORMULARIOS
                                         $pedidosproveedoresdocumentos->pedidosproveedores_idpedidosproveedores = $pedidosproveedores->idpedidosproveedores; //OBTENER LLAVE FORANEA

                                        if($pedidosproveedoresdocumentos->validate()){//VALIDAR CAMPOS DE EL MODELO

                                            $pedidosproveedoresdocumentos->url=CUploadedFile::getInstance($pedidosproveedoresdocumentos,'url');
                                            if($pedidosproveedoresdocumentos->save()){//GUARDAR ATRIBUTOS EN EL MODELO

                                                $pedidosproveedoresdocumentos->url->saveAs('attaches/nombre');
                                            }

                                            

                                            
                                        }
                                    }
                                    $transaction->commit(); //GUARDAR TRANSACCION
                                    $this->redirect(array('view','id'=>$pedidosproveedores->idpedidosproveedores)); //REDIRIGIR AL DETALLE DEL ITEM NUEVO
                                
                                }catch (Exception $e){
                                    $transaction->rollBack(); //NO GUARDAR TRANSACCION
                                    $e->getMessage(); //DESPLEGAR MENSAGE DE ERROR


                                }
                            
                        }                        
				
		}

		$this->render('create',array(
			'pedidosproveedores'=>$pedidosproveedores,
                        'pedidosproveedoresdocumentos'=>$pedidosproveedoresdocumentos,
		)); //DESPLEGAR FORMULARIO PARA CREACION DE NUEVO ITEM
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$pedidosproveedores=$this->loadModel($id); //CARGAR MODELO 
                $pedidosproveedoresdocumentos=new Pedidosproveedoresdocumentos();//CARGAR MODELO 
                
                $criteria=new CDbCriteria;
                $criteria->select='idpedidosproveedoresdocumentos,url';  // only select the 'title' column
                $criteria->condition='pedidosproveedores_idpedidosproveedores=:pedidosproveedores_idpedidosproveedores';
                $criteria->params=array(':pedidosproveedores_idpedidosproveedores'=>$id);
                $pedidosproveedoresdocumentos->model()->find($criteria);

		$this->performAjaxValidation(array($pedidosproveedores)); //VALIDACION DE CAMPOS MEDIANTE AJAX

		if(isset($_POST['Pedidosproveedores']))//CONFIRMAR SI HAY FORMULARIOS PARA SALVAR
		{
			$pedidosproveedores->attributes=$_POST['Pedidosproveedores']; // CARGAR ATRIBUTOS OBTENIDOS EN LOS FORMULARIOS
                        
                        
                        if($pedidosproveedores->validate()){ //VALIDAR CAMPOS DE EL MODELO
                            $transaction = Yii::app()->db->beginTransaction(); // INICIAR TRANSACCION
                            try{
                                    $pedidosproveedores->save(); //GUARDAR ATRIBUTOS EN EL MODELO
                                    if(isset($_POST['Pedidosproveedoresdocumentos'])){
                                        
                                           
                                         $pedidosproveedoresdocumentos->attributes=$_POST['Pedidosproveedoresdocumentos'];  // CARGAR ATRIBUTOS OBTENIDOS EN LOS FORMULARIOS
                                         $pedidosproveedoresdocumentos->pedidosproveedores_idpedidosproveedores = $pedidosproveedores->idpedidosproveedores; //OBTENER LLAVE FORANEA

                                        if($pedidosproveedoresdocumentos->validate()){//VALIDAR CAMPOS DE EL MODELO

                                            $pedidosproveedoresdocumentos->url=CUploadedFile::getInstance($pedidosproveedoresdocumentos,'url');
                                            if($pedidosproveedoresdocumentos->save()){//GUARDAR ATRIBUTOS EN EL MODELO

                                                $pedidosproveedoresdocumentos->url->saveAs('attaches/nombre');
                                            }

                                        }
                                    }
                                    $transaction->commit(); //GUARDAR TRANSACCION
                                    $this->redirect(array('view','id'=>$pedidosproveedores->idpedidosproveedores)); //REDIRIGIR AL DETALLE DEL ITEM NUEVO
                                
                                }catch (Exception $e){
                                    $transaction->rollBack(); //NO GUARDAR TRANSACCION
                                    $e->getMessage(); //DESPLEGAR MENSAGE DE ERROR


                                }
                            
                        }                        
				
		}

		$this->render('update',array(
			'pedidosproveedores'=>$pedidosproveedores,
                        'pedidosproveedoresdocumentos'=>$pedidosproveedoresdocumentos,
		)); //DESPLEGAR FORMULARIO PARA CREACION DE NUEVO ITEM
	}
        
        
        /**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionAdditems($id)
	{
		$pedidosproveedores=$this->loadModel($id); //CARGAR MODELO 
                
                

		if(isset($_POST['Pedidosproveedores']))//CONFIRMAR SI HAY FORMULARIOS PARA SALVAR
		{
			$pedidosproveedores->attributes=$_POST['Pedidosproveedores']; // CARGAR ATRIBUTOS OBTENIDOS EN LOS FORMULARIOS
       
                                              
				
		}

		$this->render('additems',array(
			'pedidosproveedores'=>$pedidosproveedores,
                        
                        
		)); //DESPLEGAR FORMULARIO PARA CREACION DE NUEVO ITEM
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
		$dataProvider=new CActiveDataProvider('Pedidosproveedores');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Pedidosproveedores('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Pedidosproveedores']))
			$model->attributes=$_GET['Pedidosproveedores'];

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
		$model=Pedidosproveedores::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='pedidosproveedores-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
