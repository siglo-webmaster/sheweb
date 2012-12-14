<?php
/* @var $this PedidosproveedoresController */
/* @var $model Pedidosproveedores */

$this->breadcrumbs=array(
	'Pedidosproveedores'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Pedidosproveedores', 'url'=>array('index')),
	array('label'=>'Manage Pedidosproveedores', 'url'=>array('admin')),
);
?>

<h1>Crear Pedido a Proveedores</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,'pedidosprovedoresdocumentos'=>$pedidosprovedoresdocumentos,'validatedPedidosprovedoresdocumentos' => $validatedPedidosprovedoresdocumentos)); ?>