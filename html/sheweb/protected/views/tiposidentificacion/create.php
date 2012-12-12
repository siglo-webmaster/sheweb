<?php
/* @var $this TiposidentificacionController */
/* @var $model Tiposidentificacion */

$this->breadcrumbs=array(
	'Tiposidentificacions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Tiposidentificacion', 'url'=>array('index')),
	array('label'=>'Manage Tiposidentificacion', 'url'=>array('admin')),
);
?>

<h1>Create Tiposidentificacion</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>