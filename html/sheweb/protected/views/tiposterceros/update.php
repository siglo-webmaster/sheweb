<?php
/* @var $this TipostercerosController */
/* @var $model Tiposterceros */

$this->breadcrumbs=array(
	'Tiposterceroses'=>array('index'),
	$model->idtiposterceros=>array('view','id'=>$model->idtiposterceros),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tiposterceros', 'url'=>array('index')),
	array('label'=>'Create Tiposterceros', 'url'=>array('create')),
	array('label'=>'View Tiposterceros', 'url'=>array('view', 'id'=>$model->idtiposterceros)),
	array('label'=>'Manage Tiposterceros', 'url'=>array('admin')),
);
?>

<h1>Update Tiposterceros <?php echo $model->idtiposterceros; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>