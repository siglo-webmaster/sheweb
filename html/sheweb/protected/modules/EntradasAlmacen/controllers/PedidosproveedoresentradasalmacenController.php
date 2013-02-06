<?php

class PedidosproveedoresentradasalmacenController extends Controller
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
                        'items'=>Yii::app()->db->createCommand("select * from view_pedidosproveedoresentradasalmacendetalle where idpedidosproveedoresentradasalmacen=".$id)->queryAll(),
                        'fallados'=>Yii::app()->db->createCommand("select * from view_pedidosproveedoresentradasalmacenfallados where idpedidosproveedoresentradasalmacen=".$id)->queryAll(),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate($id)
	{
		$model=new Pedidosproveedoresentradasalmacen;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Pedidosproveedoresentradasalmacen']))
		{
			$model->attributes=$_POST['Pedidosproveedoresentradasalmacen'];
                        $model->usuarios_idusuarios=Yii::app()->user->id;
                        $model->fecha=date('Y-m-d h:i:s');
                        if($model->save()){
                            if(isset($_POST['numeroitems'])){
                                for($i=0;$i<$_POST['numeroitems'];$i++){
                                    if(($_POST['recibir_'.$i]!='')&&($_POST['recibir_'.$i]>0)){
                                        $arreglo=array(
                                                        'idpedidosproveedoresentradasalmacen'=>$model->idpedidosproveedoresentradasalmacen,
                                                        'item_iditem'=>$_POST['iditem_'.$i],
                                                        'condicioncomercial_idcondicioncomercial'=>$_POST['idcondicioncomercial_'.$i],
                                                        'cantidad'=>$_POST['recibir_'.$i]);
                                        $detalle = new Pedidosproveedoresentradasalmacendetalle;
                                        $detalle->attributes=$arreglo;
                                        $detalle->save();
                                        
                                        Yii::app()->db->createCommand('update pedidosproveedoresitems set  recibido=recibido+'.$_POST['recibir_'.$i]." where idpedidosproveedoresitems=".$_POST['idpedidosproveedoresitems_'.$i])->execute();
                                        unset($detalle);
                                    }
                                    
                                    
                                    
                                    if(($_POST['fallado_'.$i]!='')&&($_POST['fallado_'.$i]>0)){
                                        $arreglo=array(
                                                        'idpedidosproveedoresentradasalmacen'=>$model->idpedidosproveedoresentradasalmacen,
                                                        'item_iditem'=>$_POST['iditem_'.$i],
                                                        'cantidad'=>$_POST['fallado_'.$i],
                                                        'condicioncomercial_idcondicioncomercial'=>$_POST['idcondicioncomercial_'.$i],
                                                        'observaciones'=>$_POST['observaciones_'.$i],
                                                    );
                                        $detalle = new Pedidosproveedoresentradasalmacenfallados;
                                        $detalle->attributes=$arreglo;
                                        $detalle->save();
                                        unset($detalle);
                                    }
                                    
                                    if(isset($_POST['finalizar_'.$i])){
                                           Yii::app()->db->createCommand("update pedidosproveedoresitems set estado='cerrado'  where idpedidosproveedoresitems=".$_POST['idpedidosproveedoresitems_'.$i])->execute();
                                    }
                                }
                            }
                            $items = Yii::app()->db->createCommand("select * from view_pedidosproveedoresitemsagrupado where pedidosproveedores_idpedidosproveedores=".$model->pedidosproveedores_idpedidosproveedores." and estado='activo' ")->queryAll();
                            if((!sizeof($items)>0)||(isset($_POST['cerrarpedido']))){
                              Yii::app()->db->createCommand("update pedidosproveedores set  estado='cerrado' where idpedidosproveedores=".$model->pedidosproveedores_idpedidosproveedores)->execute();  
                            }
                        }
                        $this->redirect(array('view','id'=>$model->idpedidosproveedoresentradasalmacen));
		}
                
               
                
		$this->render('create',array(
			'model'=>$model,
                        'items'=>Yii::app()->db->createCommand("select * from view_pedidosproveedoresitemsagrupado where pedidosproveedores_idpedidosproveedores=".$id." and estado='activo' ")->queryAll(),
                        'idpedidosproveedores'=>$id,
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

		if(isset($_POST['Pedidosproveedoresentradasalmacen']))
		{
			$model->attributes=$_POST['Pedidosproveedoresentradasalmacen'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->idpedidosproveedoresentradasalmacen));
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
	public function actionIndex($estado='impreso')
	{
		$dataProvider=new CActiveDataProvider('ViewPedidosproveedores',array('criteria'=>array('condition'=>"estado='".$estado."'")));
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
                        'estado'=>$estado,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Pedidosproveedoresentradasalmacen('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Pedidosproveedoresentradasalmacen']))
			$model->attributes=$_GET['Pedidosproveedoresentradasalmacen'];

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
		$model=Pedidosproveedoresentradasalmacen::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='pedidosproveedoresentradasalmacen-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
