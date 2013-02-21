<?php
/* @var $this EstrellasController */
/* @var $model Estrellas */

$this->breadcrumbs=array(
	'Estrellases'=>array('index'),
	$model->idestrellas,
);

$this->menu=array(
	array('label'=>'Listar Estrellas', 'url'=>array('index')),
	array('label'=>'Crear Estrellas', 'url'=>array('create')),
	array('label'=>'Actualizar Estrella', 'url'=>array('update', 'id'=>$model->idestrellas)),
	array('label'=>'Borrar Estrella', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idestrellas),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Estrellas', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>

<h1>Ver Estrella #<?php echo $model->idestrellas; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idestrellas',
		'nombre',
	),
)); ?>
