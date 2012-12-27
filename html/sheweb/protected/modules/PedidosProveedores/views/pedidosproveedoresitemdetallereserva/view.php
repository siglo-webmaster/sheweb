<?php
/* @var $this PedidosproveedoresitemdetallereservaController */
/* @var $model Pedidosproveedoresitemdetallereserva */

$this->breadcrumbs=array(
	'Pedidosproveedoresitemdetallereservas'=>array('index'),
	$model->idpedidosproveedoresitemdetallereserva,
);

$this->menu=array(
	array('label'=>'List Pedidosproveedoresitemdetallereserva', 'url'=>array('index')),
	array('label'=>'Create Pedidosproveedoresitemdetallereserva', 'url'=>array('create')),
	array('label'=>'Update Pedidosproveedoresitemdetallereserva', 'url'=>array('update', 'id'=>$model->idpedidosproveedoresitemdetallereserva)),
	array('label'=>'Delete Pedidosproveedoresitemdetallereserva', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idpedidosproveedoresitemdetallereserva),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pedidosproveedoresitemdetallereserva', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>View Pedidosproveedoresitemdetallereserva #<?php echo $model->idpedidosproveedoresitemdetallereserva; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idpedidosproveedoresitemdetallereserva',
		'pedidosproveedoresitems_idpedidosproveedoresitems',
		'usuarios_idusuarios',
		'bodega_idbodega',
		'reservado',
	),
)); ?>
