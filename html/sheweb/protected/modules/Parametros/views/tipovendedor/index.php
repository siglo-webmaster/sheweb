<?php
/* @var $this TipovendedorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipovendedors',
);

$this->menu=array(
	array('label'=>'Create Tipovendedor', 'url'=>array('create')),
	array('label'=>'Manage Tipovendedor', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>Tipovendedors</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
