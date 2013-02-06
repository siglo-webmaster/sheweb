<?php
/* @var $this TercerosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Terceroses',
);

$this->menu=array(
	array('label'=>'Crear Terceros', 'url'=>array('create')),
	array('label'=>'Administrar Terceros', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>Terceros</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
