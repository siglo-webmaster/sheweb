<?php
/* @var $this TipostransporteController */
/* @var $model Tipostransporte */

$this->breadcrumbs=array(
	'Tipostransportes'=>array('index'),
	$model->idtipostransporte,
);

$this->menu=array(
	array('label'=>'List Tipostransporte', 'url'=>array('index')),
	array('label'=>'Create Tipostransporte', 'url'=>array('create')),
	array('label'=>'Update Tipostransporte', 'url'=>array('update', 'id'=>$model->idtipostransporte)),
	array('label'=>'Delete Tipostransporte', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idtipostransporte),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tipostransporte', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>View Tipostransporte #<?php echo $model->idtipostransporte; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idtipostransporte',
		'nombre',
	),
)); ?>
