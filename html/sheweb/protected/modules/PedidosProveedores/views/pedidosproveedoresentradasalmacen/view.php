<?php
/* @var $this PedidosproveedoresentradasalmacenController */
/* @var $model Pedidosproveedoresentradasalmacen */

$this->breadcrumbs=array(
	'Pedidosproveedoresentradasalmacens'=>array('index'),
	$model->idpedidosproveedoresentradasalmacen,
);

$this->menu=array(
	array('label'=>'List Pedidosproveedoresentradasalmacen', 'url'=>array('index')),
	array('label'=>'Create Pedidosproveedoresentradasalmacen', 'url'=>array('create')),
	array('label'=>'Update Pedidosproveedoresentradasalmacen', 'url'=>array('update', 'id'=>$model->idpedidosproveedoresentradasalmacen)),
	array('label'=>'Delete Pedidosproveedoresentradasalmacen', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idpedidosproveedoresentradasalmacen),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pedidosproveedoresentradasalmacen', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>View Pedidosproveedoresentradasalmacen #<?php echo $model->idpedidosproveedoresentradasalmacen; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idpedidosproveedoresentradasalmacen',
		'fecha',
		'observaciones',
		'bodega_idbodega',
		'usuarios_idusuarios',
		'pedidosproveedores_idpedidosproveedores',
	),
)); ?>
