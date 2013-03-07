<?php
/* @var $this BodegareservasestrellasController */
/* @var $model Bodegareservasestrellas */

$this->breadcrumbs=array(
	'Bodegareservasestrellases'=>array('index'),
	$model->idbodegareservasestrellas=>array('view','id'=>$model->idbodegareservasestrellas),
	'Update',
);

$this->menu=array(
	array('label'=>'List Bodegareservasestrellas', 'url'=>array('index')),
	array('label'=>'Create Bodegareservasestrellas', 'url'=>array('create')),
	array('label'=>'View Bodegareservasestrellas', 'url'=>array('view', 'id'=>$model->idbodegareservasestrellas)),
	array('label'=>'Manage Bodegareservasestrellas', 'url'=>array('admin')),
);
?>

<h1>Update Bodegareservasestrellas <?php echo $model->idbodegareservasestrellas; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>