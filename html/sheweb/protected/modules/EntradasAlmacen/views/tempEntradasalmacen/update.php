<?php
/* @var $this TempEntradasalmacenController */
/* @var $model TempEntradasalmacen */

$this->breadcrumbs=array(
	'Temp Entradasalmacens'=>array('index'),
	$model->idtemp_entradasalmacen=>array('view','id'=>$model->idtemp_entradasalmacen),
	'Update',
);

$this->menu=array(
	array('label'=>'List TempEntradasalmacen', 'url'=>array('index')),
	array('label'=>'Create TempEntradasalmacen', 'url'=>array('create')),
	array('label'=>'View TempEntradasalmacen', 'url'=>array('view', 'id'=>$model->idtemp_entradasalmacen)),
	array('label'=>'Manage TempEntradasalmacen', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>Update TempEntradasalmacen <?php echo $model->idtemp_entradasalmacen; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>