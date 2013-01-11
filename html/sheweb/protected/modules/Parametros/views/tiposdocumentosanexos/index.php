<?php
/* @var $this TiposdocumentosanexosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tiposdocumentosanexoses',
);

$this->menu=array(
	array('label'=>'Create Tiposdocumentosanexos', 'url'=>array('create')),
	array('label'=>'Manage Tiposdocumentosanexos', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>Tiposdocumentosanexoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
