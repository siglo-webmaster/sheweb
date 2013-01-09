<?php
/* @var $this EditorialController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Editorials',
);

$this->menu=array(
	array('label'=>'Create Editorial', 'url'=>array('create')),
	array('label'=>'Manage Editorial', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>

<h1>Editorials</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
