<?php
/* @var $this PedidosprovedoresdocumentosController */
/* @var $model Pedidosprovedoresdocumentos */

$this->breadcrumbs=array(
	'Pedidosprovedoresdocumentoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Pedidosprovedoresdocumentos', 'url'=>array('index')),
	array('label'=>'Manage Pedidosprovedoresdocumentos', 'url'=>array('admin')),
);
?>

<h1>Create Pedidosprovedoresdocumentos</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,'pedidosproveedores_idpedidosproveedores'=>$pedidosproveedores_idpedidosproveedores)); ?>