<?php
/* @var $this EstrellasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Estrellases',
);

$this->menu=array(
	array('label'=>'Create Estrellas', 'url'=>array('create')),
	array('label'=>'Manage Estrellas', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>Estrellases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
