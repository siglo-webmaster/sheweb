<?php
/* @var $this EstrellasController */
/* @var $model Estrellas */

$this->breadcrumbs=array(
	'Estrellases'=>array('index'),
	$model->idestrellas=>array('view','id'=>$model->idestrellas),
	'Update',
);

$this->menu=array(
	array('label'=>'List Estrellas', 'url'=>array('index')),
	array('label'=>'Create Estrellas', 'url'=>array('create')),
	array('label'=>'View Estrellas', 'url'=>array('view', 'id'=>$model->idestrellas)),
	array('label'=>'Manage Estrellas', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>Update Estrellas <?php echo $model->idestrellas; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>