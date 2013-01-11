<?php
/* @var $this ProyectosespecialesController */
/* @var $model Proyectosespeciales */

$this->breadcrumbs=array(
	'Proyectosespeciales'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Proyectosespeciales', 'url'=>array('index')),
	array('label'=>'Manage Proyectosespeciales', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>Create Proyectosespeciales</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>