<?php
/* @var $this PedidosproveedoresitemsController */
/* @var $model Pedidosproveedoresitems */
/*
$this->breadcrumbs=array(
	'Pedidosproveedoresitems'=>array('index'),
	$model->idpedidosproveedoresitems,
);*/
/*
$this->menu=array(
	array('label'=>'List Pedidosproveedoresitems', 'url'=>array('index')),
	array('label'=>'Create Pedidosproveedoresitems', 'url'=>array('create')),
	array('label'=>'Update Pedidosproveedoresitems', 'url'=>array('update', 'id'=>$model->idpedidosproveedoresitems)),
	array('label'=>'Delete Pedidosproveedoresitems', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idpedidosproveedoresitems),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pedidosproveedoresitems', 'url'=>array('admin')),
);*/
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>View Pedidosproveedoresitems #<?php echo $model->idpedidosproveedoresitems; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idpedidosproveedoresitems',
		'pedidosproveedores_idpedidosproveedores',
		'item_iditem',
		'solicitado',
		'recibido',
		'estado',
	),
)); ?>
