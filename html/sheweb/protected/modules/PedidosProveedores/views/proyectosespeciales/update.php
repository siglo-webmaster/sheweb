<?php
/* @var $this ProyectosespecialesController */
/* @var $model Proyectosespeciales */

$this->breadcrumbs=array(
	'Proyectosespeciales'=>array('index'),
	$model->idproyectosespeciales=>array('view','id'=>$model->idproyectosespeciales),
	'Update',
);

$this->menu=array(
	array('label'=>'List Proyectosespeciales', 'url'=>array('index')),
	array('label'=>'Create Proyectosespeciales', 'url'=>array('create')),
	array('label'=>'View Proyectosespeciales', 'url'=>array('view', 'id'=>$model->idproyectosespeciales)),
	array('label'=>'Manage Proyectosespeciales', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>Update Proyectosespeciales <?php echo $model->idproyectosespeciales; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>