<?php
/* @var $this TipostercerosController */
/* @var $model Tiposterceros */

$this->breadcrumbs=array(
	'Tiposterceroses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Tiposterceros', 'url'=>array('index')),
	array('label'=>'Manage Tiposterceros', 'url'=>array('admin')),
);
?>

<h1>Create Tiposterceros</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>