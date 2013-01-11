<?php
/* @var $this CondicioncomercialController */
/* @var $model Condicioncomercial */

$this->breadcrumbs=array(
	'Condicioncomercials'=>array('index'),
	$model->idcondicioncomercial,
);

$this->menu=array(
	array('label'=>'List Condicioncomercial', 'url'=>array('index')),
	array('label'=>'Create Condicioncomercial', 'url'=>array('create')),
	array('label'=>'Update Condicioncomercial', 'url'=>array('update', 'id'=>$model->idcondicioncomercial)),
	array('label'=>'Delete Condicioncomercial', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idcondicioncomercial),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Condicioncomercial', 'url'=>array('admin')),
);
?>

<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>View Condicioncomercial #<?php echo $model->idcondicioncomercial; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idcondicioncomercial',
		'nombre',
	),
)); ?>
