<?php
/* @var $this EstrellasController */
/* @var $model Estrellas */

$this->breadcrumbs=array(
	'Estrellases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Estrellas', 'url'=>array('index')),
	array('label'=>'Administrar Estrellas', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>

<h1>Crear Estrellas</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>