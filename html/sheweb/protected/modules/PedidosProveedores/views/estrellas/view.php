<?php
/* @var $this EstrellasController */
/* @var $model Estrellas */

$this->breadcrumbs=array(
	'Estrellases'=>array('index'),
	$model->idestrellas,
);

$this->menu=array(
	array('label'=>'List Estrellas', 'url'=>array('index')),
	array('label'=>'Create Estrellas', 'url'=>array('create')),
	array('label'=>'Update Estrellas', 'url'=>array('update', 'id'=>$model->idestrellas)),
	array('label'=>'Delete Estrellas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idestrellas),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Estrellas', 'url'=>array('admin')),
);
?>

<h1>View Estrellas #<?php echo $model->idestrellas; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idestrellas',
		'nombre',
	),
)); ?>
