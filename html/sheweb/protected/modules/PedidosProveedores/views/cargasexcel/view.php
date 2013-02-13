<?php
/* @var $this CargasexcelController */
/* @var $model Cargasexcel */

$this->breadcrumbs=array(
	'Cargasexcels'=>array('index'),
	$model->idcargasexcel,
);

$this->menu=array(
	array('label'=>'List Cargasexcel', 'url'=>array('index')),
	array('label'=>'Create Cargasexcel', 'url'=>array('create')),
	array('label'=>'Update Cargasexcel', 'url'=>array('update', 'id'=>$model->idcargasexcel)),
	array('label'=>'Delete Cargasexcel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idcargasexcel),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Cargasexcel', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>View Cargasexcel #<?php echo $model->idcargasexcel; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idcargasexcel',
		'fecha',
		'file',
		'usergroups_user_id',
		'pedidosproveedores_idpedidosproveedores',
	),
)); ?>
