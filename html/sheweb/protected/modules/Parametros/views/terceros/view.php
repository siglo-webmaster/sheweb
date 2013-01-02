<?php
/* @var $this TercerosController */
/* @var $model Terceros */

$this->breadcrumbs=array(
	'Terceroses'=>array('index'),
	$model->idterceros,
);

$this->menu=array(
	array('label'=>'List Terceros', 'url'=>array('index')),
	array('label'=>'Create Terceros', 'url'=>array('create')),
	array('label'=>'Update Terceros', 'url'=>array('update', 'id'=>$model->idterceros)),
	array('label'=>'Delete Terceros', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idterceros),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Terceros', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>View Terceros #<?php echo $model->idterceros; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idterceros',
		'tiposidentificacion_idtiposidentificacion',
		'ciudad_idciudad',
		'nombre',
		'identificacion',
		'telefono',
		'email',
		'contacto',
		'telefonocontacto',
		'direccion',
		'estado',
	),
)); ?>
