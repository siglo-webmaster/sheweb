<?php
/* @var $this PedidosprovedoresdocumentosController */
/* @var $model Pedidosprovedoresdocumentos */

$this->breadcrumbs=array(
	'Pedidosprovedoresdocumentoses'=>array('index'),
	$model->idpedidosprovedoresdocumentos=>array('view','id'=>$model->idpedidosprovedoresdocumentos),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pedidosprovedoresdocumentos', 'url'=>array('index')),
	array('label'=>'Create Pedidosprovedoresdocumentos', 'url'=>array('create')),
	array('label'=>'View Pedidosprovedoresdocumentos', 'url'=>array('view', 'id'=>$model->idpedidosprovedoresdocumentos)),
	array('label'=>'Manage Pedidosprovedoresdocumentos', 'url'=>array('admin')),
);
?>

<h1>Update Pedidosprovedoresdocumentos <?php echo $model->idpedidosprovedoresdocumentos; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>