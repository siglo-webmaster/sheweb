<?php

class PedidosproveedoresController extends Controller
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
				'actions'=>array('index','view','getpedidoproveedoresitems','getcategoria','getestrellas','getinfoitem'),
				'pbac'=>array('read'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','additems','savechangesestrellas'),
				'pbac'=>array('write'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','changestate','printorder','dinamicmoneda', 'clone'),
				'pbac'=>array('admin'),
			),
                        array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

        /***
         * 
         * retorna toda la informacion del pedido en formato json para ser utilizado 
         * por el plugin easyUi
         */
        
        
        public function actionGetpedidoproveedoresitems($id){
            $sql = "select idpedidosproveedoresitems, iditem, titulo, condicioncomercial, editorial, categoria, idestrellas,cantidad from view_pedidosproveedoresitemsreservaestrellas where idpedidosproveedores = ".$id;
            $items = Yii::app()->db->createCommand($sql)->queryAll();
            if(is_array($items)){
                echo '{"total":'.sizeof($items).',"rows":';
                echo json_encode($items);    
                echo "}";
            }
            
        }
        
        /***
         * 
         * retorna listado de categorias en json
         */
        public function actionGetcategoria(){
            $sql = "select idcategoria, nombre from categoria where raiz = 1 order by idcategoria";
            $items = Yii::app()->db->createCommand($sql)->queryAll();
            if(is_array($items)){
                
                echo json_encode($items);    
               
            }
            
        }
        
         /***
         * 
         * retorna listado de categorias en json
         */
        public function actionGetestrellas(){
            $sql = "select * from estrellas ";
            $items = Yii::app()->db->createCommand($sql)->queryAll();
            if(is_array($items)){
                
                echo json_encode($items);    
               
            }
            
        }
        
        
         /***
         * 
         * retorna listado de categorias en json
         */
        public function actionGetinfoitem($id){
            $sql = "select * from view_detalleitem where iditem= ".$id;
            $items = Yii::app()->db->createCommand($sql)->queryAll();
            if(is_array($items)){
                
                foreach($items as $row){
                    $ed = explode('-',$row['year']);
                    echo "<h2>".$row['titulo']."</h2>";
                   
                    echo "<p><b>Editorial:</b> ".$row['editorial']."<br>";
                    echo "<b>Autor(es):</b> ".$row['autor']."<br>";
                    echo "<b>Formato:</b> ".$row['formato']."<br>";
                    echo "<b>Precio:</b> ".$row['precio']."<br>";
                    echo "<b>Impresi&oacute;n:</b> ".$ed[0]."<br>";
                    echo "<b>Edici&oacute;n: </b>".$row['numeroedicion']."<br>";
                    echo "<b>Isbn:</b> ".$row['isbn']."</p>";
                     echo "<h3>Rese&ntilde;a:</h3> <p >".$row['descripcion']."</p>";
                     $row['titulo'] = str_replace(' ','+', $row['titulo']);
                     $row['editorial'] = str_replace(' ','+', $row['editorial']);
                   
                }
               
            }
            
        }
        
        
        public function actionSavechangesestrellas(){
            
            ///CATEGORIAS
            if(trim($_REQUEST['categoria'])!=''){
                $sql = "select idcategoria from categoria where nombre='".Yii::app()->request->getParam('categoria')."' limit 1";
                $idcategoria = Yii::app()->db->createCommand($sql)->queryAll();
                if(is_array($idcategoria)){
                    $idcategoria = $idcategoria[0]['idcategoria'];
                }else{
                    return (1);
                }
            }else{
                return(1);
            }
            
            ///Editoriales
            if(trim($_REQUEST['editorial'])!=''){
                $sql = "select ideditorial from editorial where nombre='".Yii::app()->request->getParam('editorial')."' limit 1";
                $ideditorial = Yii::app()->db->createCommand($sql)->queryAll();
                if(is_array($ideditorial)){
                    $ideditorial = $ideditorial[0]['ideditorial'];
                }else{
                    return (1);
                }
            }else{
                return(1);
            }
            
            ///CondicionCommercial
            if(trim($_REQUEST['condicioncomercial'])!=''){
                $sql = "select idcondicioncomercial from condicioncomercial where nombre='".Yii::app()->request->getParam('condicioncomercial')."' limit 1";
                $idcondicioncomercial = Yii::app()->db->createCommand($sql)->queryAll();
                if(is_array($idcondicioncomercial)){
                    $idcondicioncomercial = $idcondicioncomercial[0]['idcondicioncomercial'];
                }else{
                    return (1);
                }
            }else{
                return(1);
            }
            
            //ESTRELLAS
           /* if(trim($_REQUEST['idestrellas'])==''){
                return(1);
            }*/
            /*
            //CANTIDADES
            $sql = "select cantidad from estrellascategoriaeditorial
                        where
                        estrellas_idestrellas=".$_REQUEST['idestrellas']." and 
                        categoria_idcategoria=".$idcategoria." and
                        editorial_ideditorial=".$ideditorial." and
                        condicioncomercial_idcondicioncomercial=".$idcondicioncomercial. " limit 1";
            $cantidad = Yii::app()->db->createCommand($sql)->queryAll();
            if(is_array($cantidad)){
                $cantidad = $cantidad[0]['cantidad'];
            }else{
                return (1);
            }
            */
            $transaction = Yii::app()->db->beginTransaction(); // INICIAR TRANSACCION
            try{
                $item = new Item;
                
                if($item->updateByPk(Yii::app()->request->getParam('iditem'), array('estrellas_idestrellas'=>Yii::app()->request->getParam('iditem')))){
                    $transaction->commit();
                }else{
                    
                    $transaction->rollback();
                }
                
            }catch (Exception $e){
                $transaction->rollBack();
                echo $e->getMessage();
            }
            
            
        }
        
	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id,$error=false)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
                        'pedidosproveedoresdocumentos'=>Yii::app()->db->createCommand("select * from pedidosproveedoresdocumentos where pedidosproveedores_idpedidosproveedores=".$id." ")->queryAll(),
                        'error'=>$error,
		));
	}

        /**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionClone($id,$error=false)
	{
		$pedidosproveedores = $this->loadModel($id);
                
                
                unset($pedidosproveedores->idpedidosproveedores);
                $pedidosproveedores->usuariocreacion = Yii::app()->user->id;
                $pedidosproveedores->estado = "activo";
                $pedidosproveedores->setIsNewRecord(true);
                $pedidosproveedores->save(false);
                
                ///CLONACION DE LOS ITEMS
                $pedidosproveedoresitems = Yii::app()->db->createCommand("select * from pedidosproveedoresitems where pedidosproveedores_idpedidosproveedores=".$id." ")->queryAll();
                
                if(is_array($pedidosproveedoresitems)){
                    
                    foreach($pedidosproveedoresitems as $row){
                        $items = new Pedidosproveedoresitems;
                        $items->attributes=$row;
                        $items->setIsNewRecord(true);
                        $items->pedidosproveedores_idpedidosproveedores = $pedidosproveedores->idpedidosproveedores;
                        $idpedidosproveedoresitems = $row['idpedidosproveedoresitems'];
                        unset($items->idpedidosproveedoresitems);
                        $items->save(false);
                        $newidpedidosproveedoresitems = $items->idpedidosproveedoresitems;
                        unset($items);
                        
                        ///////////CLONACION DE LAS RESERVAS DE LOS ITEMS//////////
                        
                        $pedidosproveedoresitemdetallereserva = Yii::app()->db->createCommand("select * from pedidosproveedoresitemdetallereserva where pedidosproveedoresitems_idpedidosproveedoresitems=".$idpedidosproveedoresitems)->queryAll();
                
                        if(is_array($pedidosproveedoresitemdetallereserva)){

                            foreach($pedidosproveedoresitemdetallereserva as $row2){
                                $ppitems = new Pedidosproveedoresitemdetallereserva;
                                $ppitems->attributes=$row2;
                                $ppitems->setIsNewRecord(true);
                                $ppitems->pedidosproveedoresitems_idpedidosproveedoresitems = $newidpedidosproveedoresitems;
                                unset($ppitems->idpedidosproveedoresitemdetallereserva);
                                $ppitems->save(false);
                                unset($ppitems);
                            }

                        }
                        
                        /////FIN RESERVAS ///////
                        
                        unset($idpedidosproveedoresitems);
                    }
                    
                }
                
                //////FIN CLONACION DE ITEMS
                
                /////CLONACION DE DOCUMENTOS ANEXOS
                 $pedidosproveedoresdocumentos = Yii::app()->db->createCommand("select * from pedidosproveedoresdocumentos where pedidosproveedores_idpedidosproveedores=".$id." ")->queryAll();
                
                if(is_array($pedidosproveedoresdocumentos)){
                    
                    foreach($pedidosproveedoresdocumentos as $row){
                        $items = new Pedidosproveedoresdocumentos;
                        $items->attributes=$row;
                        $items->setIsNewRecord(true);
                        $items->pedidosproveedores_idpedidosproveedores = $pedidosproveedores->idpedidosproveedores;
                        unset($items->idpedidosproveedoresdocumentos);
                        $items->save(false);
                        unset($items);
                    }
                    
                }
                
                ///// FIN CLONACION DOCUMENTOS ANEXOS
        
                $this->redirect(array('view','id'=>$pedidosproveedores->idpedidosproveedores));
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
                                    $files_uploades = CUploadedFile::getInstancesByName('anexos');
                                         
                                    if(!is_dir("uploadedfiles/pedidosproveedoresdocumentos/".$pedidosproveedores->idpedidosproveedores)){
                                           if(!mkdir("uploadedfiles/pedidosproveedoresdocumentos/".$pedidosproveedores->idpedidosproveedores)){
                                               die("No pudo crearse la carpeta de archivos " ."uploadedfiles/pedidosproveedoresdocumentos/".$pedidosproveedores->idpedidosproveedores);
                                           }
                                       }
                                       
                                    $pedidosproveedoresdocumentos->pedidosproveedores_idpedidosproveedores = $pedidosproveedores->idpedidosproveedores; //OBTENER LLAVE FORANEA  
                                    
                                    foreach ($files_uploades as $image => $pic) {
                                        $pedidosproveedoresdocumentos=new Pedidosproveedoresdocumentos();//CARGAR MODELO 
                                        $pedidosproveedoresdocumentos->pedidosproveedores_idpedidosproveedores = $pedidosproveedores->idpedidosproveedores; //OBTENER LLAVE FORANEA  
                                        $pic->saveAs("uploadedfiles/pedidosproveedoresdocumentos/".$pedidosproveedores->idpedidosproveedores."/".$pic->name);
                                        $pedidosproveedoresdocumentos->nombre=$pic->name;
                                        $pedidosproveedoresdocumentos->tiposdocumentosanexos_idtiposdocumentosanexos=1;
                                        $pedidosproveedoresdocumentos->url="uploadedfiles/pedidosproveedoresdocumentos/".$pedidosproveedores->idpedidosproveedores."/".$pic->name;
                                        $pedidosproveedoresdocumentos->save();
                                        unset($pedidosproveedoresdocumentos);
                                    }
                                    
                                    
                                    if(isset($_POST['Pedidosproveedoresdocumentos'])){

                                      $temparray = explode(chr(10),$_POST['Pedidosproveedoresdocumentos']['url']);
                                      if(is_array($temparray)){
                                          foreach($temparray as $field){
                                              
                                                $pedidosproveedoresdocumentos=new Pedidosproveedoresdocumentos();//CARGAR MODELO 
                                                $pedidosproveedoresdocumentos->pedidosproveedores_idpedidosproveedores = $pedidosproveedores->idpedidosproveedores; //OBTENER LLAVE FORANEA  
                                                $pedidosproveedoresdocumentos->nombre=$field;
                                                $pedidosproveedoresdocumentos->tiposdocumentosanexos_idtiposdocumentosanexos=2;
                                                $pedidosproveedoresdocumentos->url=$field;
                                                $pedidosproveedoresdocumentos->save();
                                                unset($pedidosproveedoresdocumentos);
                                              
                                              
                                          }
                                      }
                                        
                                    }
                                    $transaction->commit(); //GUARDAR TRANSACCION
                                    $this->redirect(array('view','id'=>$pedidosproveedores->idpedidosproveedores
                                                        )); //REDIRIGIR AL DETALLE DEL ITEM NUEVO
                                
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
                
                if($pedidosproveedores->estado!='activo'){
                        throw new CHttpException(99,'El pedido # '.$id.' no esta Activo. No puede modificarlo');
                }
                
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
                                     $files_uploades = CUploadedFile::getInstancesByName('anexos');
                                     
                                    if(!is_dir("uploadedfiles/pedidosproveedoresdocumentos/".$pedidosproveedores->idpedidosproveedores)){
                                           if(!mkdir("uploadedfiles/pedidosproveedoresdocumentos/".$pedidosproveedores->idpedidosproveedores)){
                                               die("No pudo crearse la carpeta de archivos " ."uploadedfiles/pedidosproveedoresdocumentos/".$pedidosproveedores->idpedidosproveedores);
                                           }
                                       }
                                       
                                    $pedidosproveedoresdocumentos->pedidosproveedores_idpedidosproveedores = $pedidosproveedores->idpedidosproveedores; //OBTENER LLAVE FORANEA  
                                    
                                    foreach ($files_uploades as $image => $pic) {
                                        $pedidosproveedoresdocumentos=new Pedidosproveedoresdocumentos();//CARGAR MODELO 
                                        $pedidosproveedoresdocumentos->pedidosproveedores_idpedidosproveedores = $pedidosproveedores->idpedidosproveedores; //OBTENER LLAVE FORANEA  
                                        $pic->saveAs("uploadedfiles/pedidosproveedoresdocumentos/".$pedidosproveedores->idpedidosproveedores."/".$pic->name);
                                        $pedidosproveedoresdocumentos->nombre=$pic->name;
                                        $pedidosproveedoresdocumentos->tiposdocumentosanexos_idtiposdocumentosanexos=1;
                                        $pedidosproveedoresdocumentos->url="uploadedfiles/pedidosproveedoresdocumentos/".$pedidosproveedores->idpedidosproveedores."/".$pic->name;
                                        $pedidosproveedoresdocumentos->save();
                                        unset($pedidosproveedoresdocumentos);
                                    }
                                    
                                    
                                    if(isset($_POST['Pedidosproveedoresdocumentos'])){

                                      $temparray = explode(chr(10),$_POST['Pedidosproveedoresdocumentos']['url']);
                                      if(is_array($temparray)){
                                          foreach($temparray as $field){
                                              
                                                $pedidosproveedoresdocumentos=new Pedidosproveedoresdocumentos();//CARGAR MODELO 
                                                $pedidosproveedoresdocumentos->pedidosproveedores_idpedidosproveedores = $pedidosproveedores->idpedidosproveedores; //OBTENER LLAVE FORANEA  
                                                $pedidosproveedoresdocumentos->nombre=$field;
                                                $pedidosproveedoresdocumentos->tiposdocumentosanexos_idtiposdocumentosanexos=2;
                                                $pedidosproveedoresdocumentos->url=$field;
                                                $pedidosproveedoresdocumentos->save();
                                                unset($pedidosproveedoresdocumentos);
                                              
                                              
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
	public function actionChangestate($id)
	{
		
                
                
                $pedidosproveedores=$this->loadModel($id); //CARGAR MODELO 
                
		if(isset($_POST['Pedidosproveedores']))//CONFIRMAR SI HAY FORMULARIOS PARA SALVAR
		{
			$pedidosproveedores->attributes=$_POST['Pedidosproveedores']; // CARGAR ATRIBUTOS OBTENIDOS EN LOS FORMULARIOS
                        $pedidosproveedores->usuarioaprobacion = Yii::app()->user->id;
                        $pedidosproveedores->fechaaprobacion=date("Y-m-d h:i:s");
                        
                        if($pedidosproveedores->estado=="aprobado"){
                            $rows = ViewPedidosproveedoresitemsagrupado::model()->count(" solicitado < reservado and pedidosproveedores_idpedidosproveedores=".$id);
                            if($rows>0){
                                $this->redirect(array('view','id'=>$id, 'error'=>"No puede cambiarse este pedido a estado aprobado.<br>Hay reservas superiores a lo solicitado.")); //REDIRIGIR AL DETALLE DEL ITEM
                            }
                        }
                        
                        
                        if($pedidosproveedores->validate()){ //VALIDAR CAMPOS DE EL MODELO
                            $transaction = Yii::app()->db->beginTransaction(); // INICIAR TRANSACCION
                            try{
                                    $pedidosproveedores->save(); //GUARDAR ATRIBUTOS EN EL MODELO
                                    $transaction->commit(); //GUARDAR TRANSACCION
                                    $this->redirect(array('view','id'=>$pedidosproveedores->idpedidosproveedores)); //REDIRIGIR AL DETALLE DEL ITEM NUEVO
                                
                                }catch (Exception $e){
                                    $transaction->rollBack(); //NO GUARDAR TRANSACCION
                                    $e->getMessage(); //DESPLEGAR MENSAGE DE ERROR


                                }
                            
                        }                        
				
		}

                if(($pedidosproveedores->estado=='activo')||($pedidosproveedores->estado=='aprobado')||($pedidosproveedores->estado=='cerrado')){
                    $this->render('changestate',array(
			'pedidosproveedores'=>$pedidosproveedores,

                    )); 
                }else{
                    $this->redirect(array('view','id'=>$pedidosproveedores->idpedidosproveedores)); //REDIRIGIR AL DETALLE DEL ITEM
                }
                
		
	}
        
        
        public function actionDinamicmoneda(){
            $data=Moneda::model()->findAll('idmoneda in (select distinct t.moneda_idmoneda from terceros_has_moneda as t where t.terceros_idterceros:=terceros_idterceros) ', 
                  array(':terceros_idterceros'=>(int) $_POST['idproveedor']));
 
            $data=CHtml::listData($data,'idmoneda','nombre');
            foreach($data as $value=>$name)
            {
                echo CHtml::tag('option',
                           array('value'=>$value),CHtml::encode($name),true);
            }
        }


        
        /**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionPrintorder($id)
	{
		$pedidosproveedores=$this->loadModel($id); //CARGAR MODELO 

		if(isset($_POST['Pedidosproveedores']))//CONFIRMAR SI HAY FORMULARIOS PARA SALVAR
		{
			$pedidosproveedores->attributes=$_POST['Pedidosproveedores']; // CARGAR ATRIBUTOS OBTENIDOS EN LOS FORMULARIOS
                        $pedidosproveedores->usuarioaprobacion = Yii::app()->user->id;
                        
                        if($pedidosproveedores->validate()){ //VALIDAR CAMPOS DE EL MODELO
                            $transaction = Yii::app()->db->beginTransaction(); // INICIAR TRANSACCION
                            try{
                                    $pedidosproveedores->save(); //GUARDAR ATRIBUTOS EN EL MODELO
                                    $transaction->commit(); //GUARDAR TRANSACCION
                                    $this->redirect(array('view','id'=>$pedidosproveedores->idpedidosproveedores)); //REDIRIGIR AL DETALLE DEL ITEM NUEVO
                                
                                }catch (Exception $e){
                                    $transaction->rollBack(); //NO GUARDAR TRANSACCION
                                    $e->getMessage(); //DESPLEGAR MENSAGE DE ERROR


                                }
                            
                        }                        
				
		}

                if($pedidosproveedores->estado=='aprobado'){
                    $this->render('printorder',array(
			'pedidosproveedores'=>$pedidosproveedores,

                    )); 
                }else{
                    $this->redirect(array('view','id'=>$pedidosproveedores->idpedidosproveedores)); //REDIRIGIR AL DETALLE DEL ITEM
                }
                
		
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
	public function actionIndex($estado='activo')
	{
		$dataProvider=new CActiveDataProvider('Pedidosproveedores',array('criteria'=>array('condition'=>"estado='".$estado."'")));
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
