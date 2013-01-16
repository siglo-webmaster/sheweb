<?php
/* @var $this TipovendedorController */
/* @var $model Tipovendedor */

$this->breadcrumbs=array(
	'Tipovendedors'=>array('index'),
	$model->idtipovendedor,
);

$this->menu=array(
	array('label'=>'List Tipovendedor', 'url'=>array('index')),
	array('label'=>'Create Tipovendedor', 'url'=>array('create')),
	array('label'=>'Update Tipovendedor', 'url'=>array('update', 'id'=>$model->idtipovendedor)),
	array('label'=>'Delete Tipovendedor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idtipovendedor),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tipovendedor', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>View Tipovendedor #<?php echo $model->idtipovendedor; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idtipovendedor',
		'nombre',
	),
)); ?>
