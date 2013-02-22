<?php
/* @var $this EstrellasController */
/* @var $model Estrellas */

$this->breadcrumbs=array(
	'Estrellas'=>array('index'),
	$model->idestrellas=>array('view','id'=>$model->idestrellas),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Estrellas', 'url'=>array('index')),
	array('label'=>'Crear Estrellas', 'url'=>array('create')),
	array('label'=>'Ver Estrella', 'url'=>array('view', 'id'=>$model->idestrellas)),
	array('label'=>'Administrar Estrellas', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>

<h1>Actualizar Estrellas <?php echo $model->idestrellas; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>