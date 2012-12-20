<?php
/* @var $this EditorialController */
/* @var $model Editorial */

$this->breadcrumbs=array(
	'Editorials'=>array('index'),
	$model->ideditorial,
);

$this->menu=array(
	array('label'=>'List Editorial', 'url'=>array('index')),
	array('label'=>'Create Editorial', 'url'=>array('create')),
	array('label'=>'Update Editorial', 'url'=>array('update', 'id'=>$model->ideditorial)),
	array('label'=>'Delete Editorial', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ideditorial),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Editorial', 'url'=>array('admin')),
);
?>

<h1>View Editorial #<?php echo $model->ideditorial; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ideditorial',
		'nombre',
		'estado',
	),
)); ?>
