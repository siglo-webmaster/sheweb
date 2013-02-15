<?php
/* @var $this CargasexcelController */
/* @var $model Cargasexcel */

$this->breadcrumbs=array(
	'Cargasexcels'=>array('index'),
	$model->idcargasexcel=>array('view','id'=>$model->idcargasexcel),
	'Update',
);

$this->menu=array(
	array('label'=>'List Cargasexcel', 'url'=>array('index')),
	array('label'=>'Create Cargasexcel', 'url'=>array('create')),
	array('label'=>'View Cargasexcel', 'url'=>array('view', 'id'=>$model->idcargasexcel)),
	array('label'=>'Manage Cargasexcel', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>Update Cargasexcel <?php echo $model->idcargasexcel; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>