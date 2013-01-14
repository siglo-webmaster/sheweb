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
    
    echo $this->renderPartial('_view',array('data'=>$model,"pedidosproveedoresdocumentos"=>$pedidosproveedoresdocumentos,'mail'=>$mail));
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
 

