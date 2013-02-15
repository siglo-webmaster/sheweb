<?php
/* @var $this CargasexcelController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cargasexcels',
);

$this->menu=array(
	array('label'=>'Create Cargasexcel', 'url'=>array('create')),
	array('label'=>'Manage Cargasexcel', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>Cargasexcels</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
