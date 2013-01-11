<?php
/* @var $this TiposdocumentosanexosController */
/* @var $model Tiposdocumentosanexos */

$this->breadcrumbs=array(
	'Tiposdocumentosanexoses'=>array('index'),
	$model->idtiposdocumentosanexos,
);

$this->menu=array(
	array('label'=>'List Tiposdocumentosanexos', 'url'=>array('index')),
	array('label'=>'Create Tiposdocumentosanexos', 'url'=>array('create')),
	array('label'=>'Update Tiposdocumentosanexos', 'url'=>array('update', 'id'=>$model->idtiposdocumentosanexos)),
	array('label'=>'Delete Tiposdocumentosanexos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idtiposdocumentosanexos),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tiposdocumentosanexos', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>View Tiposdocumentosanexos #<?php echo $model->idtiposdocumentosanexos; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idtiposdocumentosanexos',
		'nombre',
	),
)); ?>
