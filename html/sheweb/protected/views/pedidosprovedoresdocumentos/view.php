<?php
/* @var $this PedidosprovedoresdocumentosController */
/* @var $model Pedidosprovedoresdocumentos */

$this->breadcrumbs=array(
	'Pedidosprovedoresdocumentoses'=>array('index'),
	$model->idpedidosprovedoresdocumentos,
);

$this->menu=array(
	array('label'=>'List Pedidosprovedoresdocumentos', 'url'=>array('index')),
	array('label'=>'Create Pedidosprovedoresdocumentos', 'url'=>array('create')),
	array('label'=>'Update Pedidosprovedoresdocumentos', 'url'=>array('update', 'id'=>$model->idpedidosprovedoresdocumentos)),
	array('label'=>'Delete Pedidosprovedoresdocumentos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idpedidosprovedoresdocumentos),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pedidosprovedoresdocumentos', 'url'=>array('admin')),
);
?>

<h1>View Pedidosprovedoresdocumentos #<?php echo $model->idpedidosprovedoresdocumentos; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idpedidosprovedoresdocumentos',
		'pedidosproveedores_idpedidosproveedores',
		'url',
	),
)); ?>
