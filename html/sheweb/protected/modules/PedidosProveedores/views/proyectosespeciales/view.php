<?php
/* @var $this ProyectosespecialesController */
/* @var $model Proyectosespeciales */

$this->breadcrumbs=array(
	'Proyectosespeciales'=>array('index'),
	$model->idproyectosespeciales,
);

$this->menu=array(
	array('label'=>'List Proyectosespeciales', 'url'=>array('index')),
	array('label'=>'Create Proyectosespeciales', 'url'=>array('create')),
	array('label'=>'Update Proyectosespeciales', 'url'=>array('update', 'id'=>$model->idproyectosespeciales)),
	array('label'=>'Delete Proyectosespeciales', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idproyectosespeciales),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Proyectosespeciales', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>View Proyectosespeciales #<?php echo $model->idproyectosespeciales; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idproyectosespeciales',
		'idcliente',
		'idusuariocreacion',
		'nombre',
		'fechainicio',
		'fechacierre',
		'observaciones',
		'estado',
	),
)); ?>
