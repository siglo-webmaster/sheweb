<?php
/* @var $this PedidosproveedoresController */
/* @var $model Pedidosproveedores */

$this->breadcrumbs=array(
	'Pedidosproveedores'=>array('index'),
	$model->idpedidosproveedores,
);

$this->menu=array(
	array('label'=>'Listar Pedidos', 'url'=>array('index')),
	array('label'=>'Create Pedido', 'url'=>array('create')),
	array('label'=>'Editar Pedido', 'url'=>array('update', 'id'=>$model->idpedidosproveedores)),
	array('label'=>'Borrar Pedido', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idpedidosproveedores),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Cambiar estado', 'url'=>array('changestate', 'id'=>$model->idpedidosproveedores)),
        array('label'=>'Administrar Pedidos', 'url'=>array('admin')),
);
?>

<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>



<h1>Pedido a proveedores #<?php echo $model->idpedidosproveedores; ?></h1>
<?php
    if(isset($error)){
        echo "<h3 style='color:red;'>".$error."</h3>";
    }
?>
<?php
            $model->idproveedor0->nombre;
        ?>

<?php
    if(isset($_REQUEST['mail'])){
        $mail=$_REQUEST['mail'];
        unset($_REQUEST['mail']);
    }
    if(!isset($mail)){
        $mail=false;
    }
    
   // echo $this->renderPartial('_view',array('data'=>$model,"pedidosproveedoresdocumentos"=>$pedidosproveedoresdocumentos,'mail'=>$mail));
?>



<?php  
    

        $headers = array(
                    array('name'=>'idpedidosproveedoresitems',//id del campo
                          'label'=>'ppi',//etiqueta a mostrar
                          'hidden'=>'false',
                          'width'=>'30',
                          ),
                     array('name'=>'iditem',//id del campo
                          'label'=>'iditem',//etiqueta a mostrar
                          'hidden'=>'false',
                          'width'=>'40',
                          ),
                      array('name'=>'titulo',
                          'width'=>'310',
                          'label'=>'titulo',
                          'sortable'=>'true',
                          ),
                      array('name'=>'condicioncomercial',
                          'width'=>'80',
                          'label'=>'condicion',
                          'sortable'=>'true',
                          ),
                      array('name'=>'editorial',
                          'width'=>'90',
                          'label'=>'editorial',
                          'sortable'=>'true',
                          ),
                    array('name'=>'categoria',
                                  'width'=>'80',
                                  'label'=>'categoria',
                                   'editor'=>'true',
                                   'type'=>'combobox',
                                   'values'=>array('url'=>Yii::app()->baseUrl.'/PedidosProveedores/pedidosproveedores/getcategoria',
                                                    'valueField'=>'nombre',
                                                    'textField'=>'nombre',
                                                ),
                         ),
                      array('name'=>'idestrellas',
                                  'width'=>'50',
                                  'label'=>'estrellas',
                                   'editor'=>'true',
                                   'type'=>'combobox',
                                   'values'=>array('url'=>Yii::app()->baseUrl.'/PedidosProveedores/pedidosproveedores/getestrellas',
                                                    'valueField'=>'idestrellas',
                                                    'textField'=>'idestrellas',
                                                ),
                         ),
                    );
        
        
        $this->widget('ext.tablaeasyUi.easyUi',
                array(
                 'id'       =>'dg'.$model->idpedidosproveedores, ///id unico de la tabla
                 'width'    =>'700', //ancho
                 'height'   =>'300', //alto
                 'pk'       =>'idpedidosproveedoresitems', //primary key for eddit
                 'title'    =>'Items del pedido # '.$model->idpedidosproveedores, //titulo
                 'headers'  =>$headers, //array de cabeceras
                 'dialoginfo'=>Yii::app()->baseUrl.'/PedidosProveedores/pedidosproveedores/getinfoitem/',
                 'action'   =>Yii::app()->baseUrl.'/PedidosProveedores/pedidosproveedores/getpedidoproveedoresitems/id/'.$model->idpedidosproveedores, //url de los datos
                 'saveurl'  =>Yii::app()->baseUrl.'/PedidosProveedores/pedidosproveedores/savechangesestrellas/',
                    )
                );
        
  


/*

    $arprovider  = new CActiveDataProvider('Pais');
   
    	$this->widget('ext.htmlTableUi.htmlTableUi',array(
            'ajaxUrl'=>'site/handleHtmlTable',
            'arProvider'=>$arprovider,    
            'collapsed'=>false,
            'editable'=>true,
            'enableSort'=>true,
            'exportUrl'=>'site/export',
            'formTitle'=>'Form Title',
            'sortColumn'=>1,
            'sortOrder'=>'desc',
            'subtitle'=>'Rev 1.3.5',
            'title'=>'Table 2',
	));
*/
?>

<?php /*$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idpedidosproveedores',
		'usuariocreacion',
		'usuarioaprobacion',
		'idproveedor',
		'moneda_idmoneda',
		'fechacreacion',
		'fechacierre',
		'fechaestimada',
		'fechaaprobacion',
		'fechaentrada',
		'fechaliberacion',
		'descripcion',
		'observaciones',
		'estado',
	),
)); 
 * 
 */
 ?>
 

