<?php
/* @var $this TipoitematributosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipoitematributoses',
);

$this->menu=array(
	array('label'=>'Crear nuevo atributo', 'url'=>array('create')),
	array('label'=>'Administrar tipos de atributos', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>Tipos de atributos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
