<?php

class ItemController extends Controller
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
				'actions'=>array('create','update','getItem'),
				'pbac'=>array('write'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','getItem'),
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
                        'it'
		));
	}
        
         public function actionGetItem($idproveedor){

            if (!empty($_GET['term'])) {
                $sql = 'SELECT distinct i.iditem as id, concat ("[", i.iditem, "] ", "[", COALESCE(i.codigosiglo,""), "] ", i.nombre ) as value FROM item as i
                inner join item_has_terceros as iht on iht.item_iditem=i.iditem
                and iht.terceros_idterceros='.$idproveedor.'
                WHERE (i.nombre LIKE :qterm) or (i.iditem LIKE :qterm)  or (i.codigosiglo LIKE :qterm) ';

                $command = Yii::app()->db->createCommand($sql);
                $qterm = '%'.$_GET['term'].'%';
                $command->bindParam(":qterm", $qterm, PDO::PARAM_STR);
                $result = $command->queryAll();
                echo CJSON::encode($result); exit;
            } else {
                return false;
            }
        }

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$item=new Item;
                $item_has_categoria = new ItemHasCategoria;
                $item_has_autor = new ItemHasAutor;
                $item_has_tipoformato = new ItemHasTipoformato;
                $item_has_terceros = new ItemHasTerceros;
                $item_has_tipoitematributos = new ItemHasTipoitematributos;
                
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Item']))
		{
			$item->attributes=$_POST['Item'];
                        $item->fechacreacion = date('Y-m-d h:i:s');
			if($item->save()){
                            //Relacionar con categorias
                            if(isset($_POST['item_has_categoria'])){
                                if(is_array($_POST['item_has_categoria'] )){
                                    foreach($_POST['item_has_categoria'] as $idcategoria){
                                        $itemhascategoria =  new ItemHasCategoria;
                                        $itemhascategoria->item_iditem = $item->iditem;
                                        $itemhascategoria->categoria_idcategoria = $idcategoria;
                                        if (!$itemhascategoria->save()){
                                            print_r($itemhascategoria->errors);
                                            yii::app()->end();
                                        }
                                        
                                     }
                                }
                                   
                            }
                            
                            //Relacionar con autores
                            
                            if(isset($_POST['item_has_autor'])){
                                if(is_array($_POST['item_has_autor'] )){
                                    foreach($_POST['item_has_autor'] as $idautor){
                                        $itemhasautor =  new ItemHasAutor;
                                        $itemhasautor->item_iditem = $item->iditem;
                                        $itemhasautor->autor_idautor = $idautor;
                                        if (!$itemhasautor->save()){
                                            print_r($itemhasautor->errors);
                                            yii::app()->end();
                                        }
                                        
                                     }
                                }
                                   
                            }
                            
                            //relacion con tipos de formato
                            if(isset($_POST['item_has_tipoformato'])){
                                if(is_array($_POST['item_has_tipoformato'] )){
                                    foreach($_POST['item_has_tipoformato'] as $idtipoformato){
                                        $itemhastipoformato =  new ItemHasTipoformato;
                                        $itemhastipoformato->item_iditem = $item->iditem;
                                        $itemhastipoformato->tipoformato_idtipoformato = $idtipoformato;
                                        if (!$itemhastipoformato->save()){
                                            print_r($itemhastipoformato->errors);
                                            yii::app()->end();
                                        }
                                        
                                     }
                                }
                                   
                            }
                            
                            //relacionar con proveedor
                            $item_has_terceros->attributes = $_POST['ItemHasTerceros'];
                            $item_has_terceros->item_iditem = $item->iditem;
                            if (!$item_has_terceros->save()){
                                print_r($item_has_terceros->errors);
                                yii::app()->end();
                            }
                            
                            //Relacion con tipositematributos
                            
                            if(isset($_POST['item_has_tipoitematributos'])){
                                if(is_array($_POST['item_has_tipoitematributos'] )){
                                    foreach($_POST['item_has_tipoitematributos'] as $atributo){
                                        $itemhastipoatributos =  new ItemHasTipoitematributos;
                                        $itemhastipoatributos->item_iditem = $item->iditem;
                                        $itemhastipoatributos->tipoitematributos_idtipoitematributos = $atributo["idtipoitematributo"];
                                        switch($atributo['idtipoitematributo']){
                                            case '1':{ //GUARDAR IMAGEN
  
                                                    ////GUARDAR ADJUNTO
                                                     $files_uploades = CUploadedFile::getInstancesByName('valor'.$atributo['idtipoitematributo']);
                                                    
                                                    if(!is_dir("uploadedfiles/productos/".$item->iditem)){
                                                        if(!mkdir("uploadedfiles/productos/".$item->iditem)){
                                                            die("No pudo crearse la carpeta de archivos " ."uploadedfiles/productos/".$item->iditem);
                                                        }
                                                    }
                                                    
                                                    
                                                    
                                                    unset($itemhastipoatributos);
                                                    
                                                    foreach ($files_uploades as $image => $pic) {
                                                        if($pic->name=='')continue;
                                                        $itemhastipoatributos =  new ItemHasTipoitematributos;
                                                        $itemhastipoatributos->item_iditem = $item->iditem;
                                                        $itemhastipoatributos->tipoitematributos_idtipoitematributos = $atributo["idtipoitematributo"];
                                                        
                                                        $itemhastipoatributos->valor = "uploadedfiles/productos/".$item->iditem."/".$pic->name;
                                                        
                                                        $pic->saveAs("uploadedfiles/productos/".$item->iditem."/".$pic->name);
                                                        
                                                        
                                                        if (!$itemhastipoatributos ->save()){
                                                            print_r($itemhastipoatributos->errors);
                                                            yii::app()->end();
                                                        }
                                                        unset($itemhastipoatributos);
                                                    }
                                                    
                                                  
                                                break;
                                            }
                                            default:{ //guardat texto
                                                 if($atributo['valor']=='')continue;
                                                 $itemhastipoatributos->valor = $atributo['valor'];
                                                 if (!$itemhastipoatributos ->save()){
                                                    print_r($itemhastipoatributos->errors);
                                                    yii::app()->end();
                                                }
                                            }
                                        }
                                        
                                        
                                        
                                     }
                                }
                                   
                            }
                            
                            $this->redirect(array('view','id'=>$item->iditem));
                            
                            
                        }
				
		}

		$this->render('create',array(
			'item'=>$item,
                        'item_has_categoria'=>$item_has_categoria,
                        'item_has_autor'=>$item_has_autor,
                        'item_has_tipoformato'=>$item_has_tipoformato,
                        'item_has_terceros'=>$item_has_terceros,
                        'tipoitematributos'=>  Tipoitematributos::model()->findAll(),
                        'item_has_tipoitematributos'=> new ItemHasTipoitematributos(),
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$item=$this->loadModel($id);
                $item_has_categoria = new ItemHasCategoria;
                $item_has_autor = new ItemHasAutor;
                $item_has_tipoformato = new ItemHasTipoformato;
                $item_has_terceros = new ItemHasTerceros;
                $itemhastipoatributos =  new ItemHasTipoitematributos;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Item']))
		{
			$item->attributes=$_POST['Item'];
			if($item->save()){
                            //Actualizar categorias
                            $item_has_categoria->deleteAllByAttributes(array('item_iditem'=>$item->iditem));
                            if(isset($_POST['item_has_categoria'])){
                                if(is_array($_POST['item_has_categoria'] )){
                                    foreach($_POST['item_has_categoria'] as $idcategoria){
                                        $itemhascategoria =  new ItemHasCategoria;
                                        $itemhascategoria->item_iditem = $item->iditem;
                                        $itemhascategoria->categoria_idcategoria = $idcategoria;
                                        if (!$itemhascategoria->save()){
                                            print_r($itemhascategoria->errors);
                                            yii::app()->end();
                                        }
                                        
                                     }
                                }
                                   
                            }
                            
                            //Actualizar autores
                            $item_has_autor->deleteAllByAttributes(array('item_iditem'=>$item->iditem));
                            if(isset($_POST['item_has_autor'])){
                                if(is_array($_POST['item_has_autor'] )){
                                    foreach($_POST['item_has_autor'] as $idautor){
                                        $itemhasautor =  new ItemHasAutor;
                                        $itemhasautor->item_iditem = $item->iditem;
                                        $itemhasautor->autor_idautor = $idautor;
                                        if (!$itemhasautor->save()){
                                            print_r($itemhasautor->errors);
                                            yii::app()->end();
                                        }
                                        
                                     }
                                }
                                   
                            }
                            
                            //Actualizar formatos
                            $item_has_tipoformato->deleteAllByAttributes(array('item_iditem'=>$item->iditem));
                            if(isset($_POST['item_has_tipoformato'])){
                                if(is_array($_POST['item_has_tipoformato'] )){
                                    foreach($_POST['item_has_tipoformato'] as $idtipoformato){
                                        $itemhastipoformato =  new ItemHasTipoformato;
                                        $itemhastipoformato->item_iditem = $item->iditem;
                                        $itemhastipoformato->tipoformato_idtipoformato = $idtipoformato;
                                        if (!$itemhastipoformato->save()){
                                            print_r($itemhastipoformato->errors);
                                            yii::app()->end();
                                        }
                                        
                                     }
                                }
                                   
                            }
                            
                            //Actualizar proveedor
                            $item_has_terceros->deleteAllByAttributes(array('item_iditem'=>$item->iditem));
                            $item_has_terceros->attributes = $_POST['ItemHasTerceros'];
                            $item_has_terceros->item_iditem = $item->iditem;
                            if (!$item_has_terceros->save()){
                                print_r($item_has_terceros->errors);
                                yii::app()->end();
                            }
                            
                            //Relacion con tipositematributos
                            $itemhastipoatributos->deleteAllByAttributes(array('item_iditem'=>$item->iditem));
                            unset($itemhastipoatributos);
                            if(isset($_POST['item_has_tipoitematributos'])){
                                if(is_array($_POST['item_has_tipoitematributos'] )){
                                    foreach($_POST['item_has_tipoitematributos'] as $atributo){
                                        $itemhastipoatributos =  new ItemHasTipoitematributos;
                                        $itemhastipoatributos->item_iditem = $item->iditem;
                                        $itemhastipoatributos->tipoitematributos_idtipoitematributos = $atributo["idtipoitematributo"];
                                        switch($atributo['idtipoitematributo']){
                                            case '1':{ //GUARDAR IMAGEN
  
                                                    ////GUARDAR ADJUNTO
                                                     $files_uploades = CUploadedFile::getInstancesByName('valor'.$atributo['idtipoitematributo']);
                                                    
                                                    if(!is_dir("uploadedfiles/productos/".$item->iditem)){
                                                        if(!mkdir("uploadedfiles/productos/".$item->iditem)){
                                                            die("No pudo crearse la carpeta de archivos " ."uploadedfiles/productos/".$item->iditem);
                                                        }
                                                    }
                                                    
                                                    
                                                    
                                                    unset($itemhastipoatributos);
                                                    
                                                    foreach ($files_uploades as $image => $pic) {
                                                        if($pic->name=='')continue;
                                                        $itemhastipoatributos =  new ItemHasTipoitematributos;
                                                        $itemhastipoatributos->item_iditem = $item->iditem;
                                                        $itemhastipoatributos->tipoitematributos_idtipoitematributos = $atributo["idtipoitematributo"];
                                                        
                                                        $itemhastipoatributos->valor = "uploadedfiles/productos/".$item->iditem."/".$pic->name;
                                                        
                                                        $pic->saveAs("uploadedfiles/productos/".$item->iditem."/".$pic->name);
                                                        
                                                        
                                                        if (!$itemhastipoatributos ->save()){
                                                            print_r($itemhastipoatributos->errors);
                                                            yii::app()->end();
                                                        }
                                                        unset($itemhastipoatributos);
                                                    }
                                                    
                                                  
                                                break;
                                            }
                                            default:{ //guardat texto
                                                 if($atributo['valor']=='')continue;
                                                 $itemhastipoatributos->valor = $atributo['valor'];
                                                 if (!$itemhastipoatributos ->save()){
                                                    print_r($itemhastipoatributos->errors);
                                                    yii::app()->end();
                                                }
                                            }
                                        }
                                        
                                        
                                        
                                     }
                                }
                                   
                            }
                            
                            
                            
                            $this->redirect(array('view','id'=>$item->iditem));
                            
                            
                        }
				
		}
               
               //Get listado de categorias
               $sql = "select ic.categoria_idcategoria   from item_has_categoria as ic 
                            where ic.item_iditem='".$id."'" ;               
                $categorias = Yii::app()->db->createCommand($sql)->queryAll();
                if(is_array($categorias)){
                    $cat=array();
                    foreach($categorias as $row){
                        $cat[]=$row['categoria_idcategoria'];
                    }
                }else{
                    $row=null;
                }
                
                
                
               //Get listado de autores
               $sql = "select ia.autor_idautor   from item_has_autor as ia 
                            where ia.item_iditem='".$id."'" ;               
                $autores = Yii::app()->db->createCommand($sql)->queryAll();
                if(is_array($autores)){
                    $aut=array();
                    foreach($autores as $row){
                        $aut[]=$row['autor_idautor'];
                    }
                }else{
                    $row=null;
                }
                
               
                //Get listado de formatos
               $sql = "select itf.tipoformato_idtipoformato   from item_has_tipoformato as itf 
                            where itf.item_iditem='".$id."'" ;               
                $formatos = Yii::app()->db->createCommand($sql)->queryAll();
                if(is_array($formatos)){
                    $form=array();
                    foreach($formatos as $row){
                        $form[]=$row['tipoformato_idtipoformato'];
                    }
                }else{
                    $row=null;
                }
                
                $item_has_terceros = ItemHasTerceros::model()->findByAttributes(array('item_iditem'=>$id));
                if(!$item_has_terceros){
                    $item_has_terceros = new ItemHasTerceros;
                }
                
                $item_has_tipoitematributos = ItemHasTipoitematributos::model()->findAllByAttributes(array('item_iditem'=>$id));
                if(!$item_has_tipoitematributos){
                    $item_has_tipoitematributos = new ItemHasTipoitematributos;
                }
                
		$this->render('update',array(
			'item'=>$item,
                        'item_has_categoria'=>$cat,
                        'item_has_autor'=>$aut,
                        'item_has_tipoformato'=>$form,
                        'item_has_terceros'=>$item_has_terceros,
                        'tipoitematributos'=>  Tipoitematributos::model()->findAll(),
                        'item_has_tipoitematributos'=>$item_has_tipoitematributos,
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
		$dataProvider=new CActiveDataProvider('Item');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Item('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Item']))
			$model->attributes=$_GET['Item'];

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
		$model=Item::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='item-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
