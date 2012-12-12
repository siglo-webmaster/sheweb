<?php
/* @var $this TiposidentificacionController */
/* @var $model Tiposidentificacion */

$this->breadcrumbs=array(
	'Tiposidentificacions'=>array('index'),
	$model->idtiposidentificacion,
);

$this->menu=array(
	array('label'=>'List Tiposidentificacion', 'url'=>array('index')),
	array('label'=>'Create Tiposidentificacion', 'url'=>array('create')),
	array('label'=>'Update Tiposidentificacion', 'url'=>array('update', 'id'=>$model->idtiposidentificacion)),
	array('label'=>'Delete Tiposidentificacion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idtiposidentificacion),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tiposidentificacion', 'url'=>array('admin')),
);
?>

<h1>View Tiposidentificacion #<?php echo $model->idtiposidentificacion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idtiposidentificacion',
		'nombre',
	),
)); ?>
