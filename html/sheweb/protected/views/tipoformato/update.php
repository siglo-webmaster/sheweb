<?php
/* @var $this TipoformatoController */
/* @var $model Tipoformato */

$this->breadcrumbs=array(
	'Tipoformatos'=>array('index'),
	$model->idtipoformato=>array('view','id'=>$model->idtipoformato),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tipoformato', 'url'=>array('index')),
	array('label'=>'Create Tipoformato', 'url'=>array('create')),
	array('label'=>'View Tipoformato', 'url'=>array('view', 'id'=>$model->idtipoformato)),
	array('label'=>'Manage Tipoformato', 'url'=>array('admin')),
);
?>

<h1>Update Tipoformato <?php echo $model->idtipoformato; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>