<?php
/* @var $this CondicioncomercialController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Condicioncomercials',
);

$this->menu=array(
	array('label'=>'Create Condicioncomercial', 'url'=>array('create')),
	array('label'=>'Manage Condicioncomercial', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>Condicioncomercials</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
