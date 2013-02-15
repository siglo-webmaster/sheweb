<?php
/* @var $this TempEntradasalmacenController */
/* @var $model TempEntradasalmacen */

$this->breadcrumbs=array(
	'Temp Entradasalmacens'=>array('index'),
	$model->idtemp_entradasalmacen,
);

$this->menu=array(
	array('label'=>'List TempEntradasalmacen', 'url'=>array('index')),
	array('label'=>'Create TempEntradasalmacen', 'url'=>array('create')),
	array('label'=>'Update TempEntradasalmacen', 'url'=>array('update', 'id'=>$model->idtemp_entradasalmacen)),
	array('label'=>'Delete TempEntradasalmacen', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idtemp_entradasalmacen),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TempEntradasalmacen', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>View TempEntradasalmacen #<?php echo $model->idtemp_entradasalmacen; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idtemp_entradasalmacen',
		'documentoproveedor',
		'observaciones',
		'bodega_idbodega',
		'pedidosproveedores_idpedidosproveedores',
		'usergroups_user_id',
	),
)); ?>
