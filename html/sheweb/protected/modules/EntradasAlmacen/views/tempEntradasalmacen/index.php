<?php
/* @var $this TempEntradasalmacenController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Temp Entradasalmacens',
);

$this->menu=array(
	array('label'=>'Create TempEntradasalmacen', 'url'=>array('create')),
	array('label'=>'Manage TempEntradasalmacen', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>Entradas de almacen agil</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
