<?php
/* @var $this TipostransporteController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipostransportes',
);

$this->menu=array(
	array('label'=>'Create Tipostransporte', 'url'=>array('create')),
	array('label'=>'Manage Tipostransporte', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>Tipostransportes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
