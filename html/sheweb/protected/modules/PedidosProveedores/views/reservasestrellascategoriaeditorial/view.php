<?php
/* @var $this ReservasestrellascategoriaeditorialController */
/* @var $model Reservasestrellascategoriaeditorial */

$this->breadcrumbs=array(
	'Reservasestrellascategoriaeditorials'=>array('index'),
	$model->idreservasestrellascategoriaeditorial,
);

$this->menu=array(
	array('label'=>'List Reservasestrellascategoriaeditorial', 'url'=>array('index')),
	array('label'=>'Create Reservasestrellascategoriaeditorial', 'url'=>array('create')),
	array('label'=>'Update Reservasestrellascategoriaeditorial', 'url'=>array('update', 'id'=>$model->idreservasestrellascategoriaeditorial)),
	array('label'=>'Delete Reservasestrellascategoriaeditorial', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idreservasestrellascategoriaeditorial),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Reservasestrellascategoriaeditorial', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>

<h1>View Reservasestrellascategoriaeditorial #<?php echo $model->idreservasestrellascategoriaeditorial; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idreservasestrellascategoriaeditorial',
		'estrellascategoriaeditorial_idestrellascategoriaeditorial',
		'ciudad_idciudad',
		'cantidad',
		'prioridad',
	),
)); ?>
