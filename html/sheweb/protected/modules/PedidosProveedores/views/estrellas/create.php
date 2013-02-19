<?php
/* @var $this EstrellasController */
/* @var $model Estrellas */

$this->breadcrumbs=array(
	'Estrellases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Estrellas', 'url'=>array('index')),
	array('label'=>'Manage Estrellas', 'url'=>array('admin')),
);
?>

<h1>Create Estrellas</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>