<?php
/* @var $this TipoformatoController */
/* @var $model Tipoformato */

$this->breadcrumbs=array(
	'Tipoformatos'=>array('index'),
	$model->idtipoformato,
);

$this->menu=array(
	array('label'=>'List Tipoformato', 'url'=>array('index')),
	array('label'=>'Create Tipoformato', 'url'=>array('create')),
	array('label'=>'Update Tipoformato', 'url'=>array('update', 'id'=>$model->idtipoformato)),
	array('label'=>'Delete Tipoformato', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idtipoformato),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tipoformato', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>View Tipoformato #<?php echo $model->idtipoformato; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idtipoformato',
		'nombre',
	),
)); ?>
