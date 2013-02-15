<?php
/* @var $this EstrellascategoriaeditorialController */
/* @var $model Estrellascategoriaeditorial */

$this->breadcrumbs=array(
	'Estrellascategoriaeditorials'=>array('index'),
	$model->idestrellascategoriaeditorial,
);

$this->menu=array(
	array('label'=>'List Estrellascategoriaeditorial', 'url'=>array('index')),
	array('label'=>'Create Estrellascategoriaeditorial', 'url'=>array('create')),
	array('label'=>'Update Estrellascategoriaeditorial', 'url'=>array('update', 'id'=>$model->idestrellascategoriaeditorial)),
	array('label'=>'Delete Estrellascategoriaeditorial', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idestrellascategoriaeditorial),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Estrellascategoriaeditorial', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>View Estrellascategoriaeditorial #<?php echo $model->idestrellascategoriaeditorial; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idestrellascategoriaeditorial',
		'estrellas_idestrellas',
		'categoria_idcategoria',
		'editorial_ideditorial',
		'condicioncomercial_idcondicioncomercial',
		'cantidad',
	),
)); ?>
