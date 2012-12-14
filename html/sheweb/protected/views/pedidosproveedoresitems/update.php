<?php
/* @var $this PedidosproveedoresitemsController */
/* @var $model Pedidosproveedoresitems */

$this->breadcrumbs=array(
	'Pedidosproveedoresitems'=>array('index'),
	$model->idpedidosproveedoresitems=>array('view','id'=>$model->idpedidosproveedoresitems),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pedidosproveedoresitems', 'url'=>array('index')),
	array('label'=>'Create Pedidosproveedoresitems', 'url'=>array('create')),
	array('label'=>'View Pedidosproveedoresitems', 'url'=>array('view', 'id'=>$model->idpedidosproveedoresitems)),
	array('label'=>'Manage Pedidosproveedoresitems', 'url'=>array('admin')),
);
?>

<h1>Update Pedidosproveedoresitems <?php echo $model->idpedidosproveedoresitems; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>