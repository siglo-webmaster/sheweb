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
	array('label'=>'Ver detalles', 'url'=>array('view', 'id'=>$pedidosproveedores->idpedidosproveedores)),
	array('label'=>'Administrar pedidos', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>Editar pedido a proveedores # <?php echo $pedidosproveedores->idpedidosproveedores; ?></h1>

<?php echo $this->renderPartial('_form', array('pedidosproveedores'=>$pedidosproveedores,'pedidosproveedoresdocumentos'=>$pedidosproveedoresdocumentos)); ?>