<?php
/* @var $this MonedaController */
/* @var $model Moneda */

$this->breadcrumbs=array(
	'Monedas'=>array('index'),
	$model->idmoneda,
);

$this->menu=array(
	array('label'=>'List Moneda', 'url'=>array('index')),
	array('label'=>'Create Moneda', 'url'=>array('create')),
	array('label'=>'Update Moneda', 'url'=>array('update', 'id'=>$model->idmoneda)),
	array('label'=>'Delete Moneda', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idmoneda),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Moneda', 'url'=>array('admin')),
);
?>

<h1>View Moneda #<?php echo $model->idmoneda; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idmoneda',
		'nombre',
	),
)); ?>
