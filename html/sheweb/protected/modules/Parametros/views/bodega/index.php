<?php
/* @var $this BodegaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Bodegas',
);

$this->menu=array(
	array('label'=>'Create Bodega', 'url'=>array('create')),
	array('label'=>'Manage Bodega', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>Bodegas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
