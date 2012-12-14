<?php
/* @var $this PedidosproveedoresController */
/* @var $model Pedidosproveedores */

$this->breadcrumbs=array(
	'Pedidosproveedores'=>array('index'),
	$model->idpedidosproveedores=>array('view','id'=>$model->idpedidosproveedores),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pedidosproveedores', 'url'=>array('index')),
	array('label'=>'Create Pedidosproveedores', 'url'=>array('create')),
	array('label'=>'View Pedidosproveedores', 'url'=>array('view', 'id'=>$model->idpedidosproveedores)),
	array('label'=>'Manage Pedidosproveedores', 'url'=>array('admin')),
);
?>

<h1>Update Pedidosproveedores <?php echo $model->idpedidosproveedores; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,'pedidosprovedoresdocumentos'=>$pedidosprovedoresdocumentos,'validatedPedidosprovedoresdocumentos' => $validatedPedidosprovedoresdocumentos)); ?>