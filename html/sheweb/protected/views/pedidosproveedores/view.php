<?php
/* @var $this PedidosproveedoresController */
/* @var $model Pedidosproveedores */

$this->breadcrumbs=array(
	'Pedidosproveedores'=>array('index'),
	$model->idpedidosproveedores,
);

$this->menu=array(
	array('label'=>'List Pedidosproveedores', 'url'=>array('index')),
	array('label'=>'Create Pedidosproveedores', 'url'=>array('create')),
	array('label'=>'Update Pedidosproveedores', 'url'=>array('update', 'id'=>$model->idpedidosproveedores)),
	array('label'=>'Delete Pedidosproveedores', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idpedidosproveedores),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pedidosproveedores', 'url'=>array('admin')),
);
?>

<h1>View Pedidosproveedores #<?php echo $model->idpedidosproveedores; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idpedidosproveedores',
		'usuariocreacion',
		'usuarioaprobacion',
		'idproveedor',
		'moneda_idmoneda',
		'fechacreacion',
		'fechacierre',
		'fechaestimada',
		'fechaaprobacion',
		'fechaentrada',
		'fechaliberacion',
		'descripcion',
		'observaciones',
		'estado',
	),
)); ?>
