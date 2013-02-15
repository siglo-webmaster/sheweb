<?php
/* @var $this TempEntradasalmacendetalleController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Temp Entradasalmacendetalles',
);

$this->menu=array(
	array('label'=>'Create TempEntradasalmacendetalle', 'url'=>array('create')),
	array('label'=>'Manage TempEntradasalmacendetalle', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>Temp Entradasalmacendetalles</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
