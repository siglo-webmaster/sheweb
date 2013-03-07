<?php
/* @var $this BodegareservasestrellasController */
/* @var $model Bodegareservasestrellas */

$this->breadcrumbs=array(
	'Bodegareservasestrellases'=>array('index'),
	$model->idbodegareservasestrellas,
);

$this->menu=array(
	array('label'=>'List Bodegareservasestrellas', 'url'=>array('index')),
	array('label'=>'Create Bodegareservasestrellas', 'url'=>array('create')),
	array('label'=>'Update Bodegareservasestrellas', 'url'=>array('update', 'id'=>$model->idbodegareservasestrellas)),
	array('label'=>'Delete Bodegareservasestrellas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idbodegareservasestrellas),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Bodegareservasestrellas', 'url'=>array('admin')),
);
?>

<h1>View Bodegareservasestrellas #<?php echo $model->idbodegareservasestrellas; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idbodegareservasestrellas',
		'bodega_idbodega',
		'idreservasestrellascategoriaeditorial',
		'cantidad',
		'prioridad',
	),
)); ?>
