<?php
/* @var $this PedidosproveedoresController */
/* @var $model Pedidosproveedores */

$this->breadcrumbs=array(
	'Pedidosproveedores'=>array('index'),
	$pedidosproveedores->idpedidosproveedores=>array('view','id'=>$pedidosproveedores->idpedidosproveedores),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Pedidos', 'url'=>array('index')),
	array('label'=>'Crear Pedido', 'url'=>array('create')),
	array('label'=>'Ver Detalles', 'url'=>array('view', 'id'=>$pedidosproveedores->idpedidosproveedores)),
	array('label'=>'Administrar Pedidos', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>Generar Impresion de Orden a Proveedores # <?php echo $pedidosproveedores->idpedidosproveedores; ?></h1>


<?php echo $this->renderPartial('_printorder', array('pedidosproveedores'=>$pedidosproveedores)); ?>