<?php
/* @var $this ProyectosespecialesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Proyectosespeciales',
);

$this->menu=array(
	array('label'=>'Create Proyectosespeciales', 'url'=>array('create')),
	array('label'=>'Manage Proyectosespeciales', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>Proyectosespeciales</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
