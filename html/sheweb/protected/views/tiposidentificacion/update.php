<?php
/* @var $this TiposidentificacionController */
/* @var $model Tiposidentificacion */

$this->breadcrumbs=array(
	'Tiposidentificacions'=>array('index'),
	$model->idtiposidentificacion=>array('view','id'=>$model->idtiposidentificacion),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tiposidentificacion', 'url'=>array('index')),
	array('label'=>'Create Tiposidentificacion', 'url'=>array('create')),
	array('label'=>'View Tiposidentificacion', 'url'=>array('view', 'id'=>$model->idtiposidentificacion)),
	array('label'=>'Manage Tiposidentificacion', 'url'=>array('admin')),
);
?>

<h1>Update Tiposidentificacion <?php echo $model->idtiposidentificacion; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>