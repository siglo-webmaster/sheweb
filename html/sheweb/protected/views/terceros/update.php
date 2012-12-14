<?php
/* @var $this TercerosController */
/* @var $model Terceros */

$this->breadcrumbs=array(
	'Terceroses'=>array('index'),
	$model->idterceros=>array('view','id'=>$model->idterceros),
	'Update',
);

$this->menu=array(
	array('label'=>'List Terceros', 'url'=>array('index')),
	array('label'=>'Create Terceros', 'url'=>array('create')),
	array('label'=>'View Terceros', 'url'=>array('view', 'id'=>$model->idterceros)),
	array('label'=>'Manage Terceros', 'url'=>array('admin')),
);
?>

<h1>Update Terceros <?php echo $model->idterceros; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>