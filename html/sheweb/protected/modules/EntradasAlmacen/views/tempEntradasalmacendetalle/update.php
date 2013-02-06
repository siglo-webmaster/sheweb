<?php
/* @var $this TempEntradasalmacendetalleController */
/* @var $model TempEntradasalmacendetalle */

$this->breadcrumbs=array(
	'Temp Entradasalmacendetalles'=>array('index'),
	$model->idtemp_entradasalmacendetalle=>array('view','id'=>$model->idtemp_entradasalmacendetalle),
	'Update',
);

$this->menu=array(
	array('label'=>'List TempEntradasalmacendetalle', 'url'=>array('index')),
	array('label'=>'Create TempEntradasalmacendetalle', 'url'=>array('create')),
	array('label'=>'View TempEntradasalmacendetalle', 'url'=>array('view', 'id'=>$model->idtemp_entradasalmacendetalle)),
	array('label'=>'Manage TempEntradasalmacendetalle', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>Update TempEntradasalmacendetalle <?php echo $model->idtemp_entradasalmacendetalle; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>