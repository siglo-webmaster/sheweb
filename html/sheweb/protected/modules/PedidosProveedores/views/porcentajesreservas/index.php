<?php
/* @var $this PorcentajesreservasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Porcentajesreservases',
);

$this->menu=array(
	array('label'=>'Create Porcentajesreservas', 'url'=>array('create')),
	array('label'=>'Manage Porcentajesreservas', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>Porcentajesreservases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
