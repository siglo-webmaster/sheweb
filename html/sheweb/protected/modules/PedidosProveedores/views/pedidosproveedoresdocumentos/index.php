<?php
/* @var $this PedidosproveedoresdocumentosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pedidosproveedoresdocumentoses',
);

$this->menu=array(
	array('label'=>'Create Pedidosproveedoresdocumentos', 'url'=>array('create')),
	array('label'=>'Manage Pedidosproveedoresdocumentos', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>Pedidosproveedoresdocumentoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
