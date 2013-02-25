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
    $sql = "select * from pedidosproveedoresitems where pedidosproveedores_idpedidosproveedores = ".$model->idpedidosproveedores;
    $items = Yii::app()->db->createCommand($sql)->queryAll();
    if(is_array($items)){
        
        $headers = array(
                      array('name'=>'iditem','width'=>'80','label'=>'id item'),
                      array('name'=>'nombre','width'=>'200','label'=>'titulo'),
                      array('name'=>'isbn','width'=>'80','label'=>'isbn'),
                    );

        $this->widget('ext.tablaeasyUi.easyUi',
                array(
                 'width'=>'700',
                 'height'=>'300',
                 'title'=>'Tabla de prueba',
                 'headers'=>$headers,
                 'data'=>$items,
                 'cols'=>array('item_iditem','solicitado','estado'),
                    )
                );
        
    }


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
 

