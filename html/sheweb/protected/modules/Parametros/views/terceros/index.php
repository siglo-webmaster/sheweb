<?php
/* @var $this TercerosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Terceroses',
);

$this->menu=array(
	array('label'=>'Create Terceros', 'url'=>array('create')),
	array('label'=>'Manage Terceros', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>Terceroses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
