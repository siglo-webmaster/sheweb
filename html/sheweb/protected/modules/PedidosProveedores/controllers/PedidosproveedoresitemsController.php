<?php

class PedidosproveedoresitemsController extends Controller
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
				'actions'=>array('create','update','confirmados'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
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
		$model=new Pedidosproveedoresitems;
                
                if(isset($_REQUEST['pedidosproveedores_idpedidosproveedores'])){
                    $pedidosproveedores_idpedidosproveedores=$_REQUEST['pedidosproveedores_idpedidosproveedores'];
                    $pedido = $this->loadPedidosproveedoresModel($pedidosproveedores_idpedidosproveedores);
                    if($pedido->estado!='activo'){
                        throw new CHttpException(99,'El pedido # '.$pedidosproveedores_idpedidosproveedores.' no esta Activo. No puede agregar mas items');
                    }
                }else{
                    $pedidosproveedores_idpedidosproveedores=false;
                }
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Pedidosproveedoresitems']))
		{
			$model->attributes=$_POST['Pedidosproveedoresitems'];
                        $temp2 = $model->item_iditem;
                        $temp = explode('] ',$model->item_iditem);
                        $model->item_iditem= ltrim($temp[0],'[');
                        $model->estado='activo';
                        $model->recibido=0;
			if($model->save()){
                            /*ASIGNACION DE RESERVAS AUTOMATICA*/
                            
                            $sql = "select * from view_porcentajesreservas 
                                         where iditem='".$model->item_iditem."' 
                                         and proyectosespeciales_idproyectosespeciales=". $model->proyectosespeciales_idproyectosespeciales ;               
                             $reservar = Yii::app()->db->createCommand($sql)->queryAll();
                             if(is_array($reservar)){
                                 $solicitar = $model->solicitado;
                                 $total = $solicitar;
                                 foreach($reservar as $row){
                                     if($solicitar > 0){
                                         
                                         $itemdetallereserva = new Pedidosproveedoresitemdetallereserva;
                                         $itemdetallereserva->reservado = ceil( $row['porcentaje'] * $total);
                                         if($itemdetallereserva->reservado <= 0){
                                             unset ($itemdetallereserva);
                                             continue;
                                         }
                                         if($solicitar < $itemdetallereserva->reservado){
                                             $itemdetallereserva->reservado = $solicitar;
                                             $solicitar = 0;
                                         }else{
                                             $solicitar = $solicitar - $itemdetallereserva->reservado;
                                         }
                                         
                                         $itemdetallereserva->pedidosproveedoresitems_idpedidosproveedoresitems = $model->idpedidosproveedoresitems;
                                         $itemdetallereserva->bodega_idbodega = $row['bodega_idbodega'];
                                         $itemdetallereserva->proyectosespeciales_idproyectosespeciales = $model->proyectosespeciales_idproyectosespeciales;
                                         $itemdetallereserva->usuarios_idusuarios = $row['usergroups_user_id'];
                                         $itemdetallereserva->save(false);
                                         unset ($itemdetallereserva);
                                     }
                                 }
                             }
                            /*FIN ASIGNACION RESERVAS*/
                            
                            $this->redirect (Yii::app ()->baseUrl."/index.php/PedidosProveedores/pedidosproveedores/additems/id/".$pedidosproveedores_idpedidosproveedores);
                        }else{
                            $model->item_iditem = $temp2;
                        }
                            
		}

		$this->render('create',array(
			'model'=>$model,
                        'pedidosproveedores_idpedidosproveedores'=>$pedidosproveedores_idpedidosproveedores,
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
                
                if($model->pedidosproveedoresIdpedidosproveedores->estado!="activo"){
                    throw new CHttpException(99,'El pedido # '.$model->pedidosproveedoresIdpedidosproveedores->idpedidosproveedores.' no esta Activo. No puede agregar mas items');
                }
                
		if(isset($_POST['Pedidosproveedoresitems']))
		{
			$model->attributes=$_POST['Pedidosproveedoresitems'];
			if($model->save())
				$this->redirect (Yii::app ()->baseUrl."/index.php/PedidosProveedores/pedidosproveedores/additems/id/".$model->pedidosproveedores_idpedidosproveedores);

		}

                               
		$this->render('update',array(
			'model'=>$model,
                    'pedidosproveedores_idpedidosproveedores'=>$model->pedidosproveedores_idpedidosproveedores,
		));
	}
        
        /**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionConfirmados($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
                
                if($model->pedidosproveedoresIdpedidosproveedores->estado!="impreso"){
                    throw new CHttpException(99,'El pedido # '.$model->pedidosproveedoresIdpedidosproveedores->idpedidosproveedores.' no ha sido impreso. No puede confirmar items');
                }
                
		if(isset($_POST['Pedidosproveedoresitems']))
		{
			$model->attributes=$_POST['Pedidosproveedoresitems'];
			if($model->save())
				$this->redirect (Yii::app ()->baseUrl."/index.php/PedidosProveedores/pedidosproveedores/additems/id/".$model->pedidosproveedores_idpedidosproveedores);

		}

                               
		$this->render('confirmados',array(
			'model'=>$model,
                    'pedidosproveedores_idpedidosproveedores'=>$model->pedidosproveedores_idpedidosproveedores,
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
		$dataProvider=new CActiveDataProvider('Pedidosproveedoresitems');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Pedidosproveedoresitems('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Pedidosproveedoresitems']))
			$model->attributes=$_GET['Pedidosproveedoresitems'];

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
		$model=Pedidosproveedoresitems::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

        /**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadPedidosproveedoresModel($id)
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='pedidosproveedoresitems-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
