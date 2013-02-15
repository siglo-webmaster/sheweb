<?php
/* @var $this TempEntradasalmacendetalleController */
/* @var $model TempEntradasalmacendetalle */

$this->breadcrumbs=array(
	'Temp Entradasalmacendetalles'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TempEntradasalmacendetalle', 'url'=>array('index')),
	array('label'=>'Manage TempEntradasalmacendetalle', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>Create TempEntradasalmacendetalle</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>