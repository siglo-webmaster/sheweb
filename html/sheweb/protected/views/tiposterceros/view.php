<?php
/* @var $this TipostercerosController */
/* @var $model Tiposterceros */

$this->breadcrumbs=array(
	'Tiposterceroses'=>array('index'),
	$model->idtiposterceros,
);

$this->menu=array(
	array('label'=>'List Tiposterceros', 'url'=>array('index')),
	array('label'=>'Create Tiposterceros', 'url'=>array('create')),
	array('label'=>'Update Tiposterceros', 'url'=>array('update', 'id'=>$model->idtiposterceros)),
	array('label'=>'Delete Tiposterceros', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idtiposterceros),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tiposterceros', 'url'=>array('admin')),
);
?>

<h1>View Tiposterceros #<?php echo $model->idtiposterceros; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idtiposterceros',
		'nombre',
	),
)); ?>
