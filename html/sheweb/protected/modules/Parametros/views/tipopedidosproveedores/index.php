<?php
/* @var $this TipopedidosproveedoresController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipopedidosproveedores',
);

$this->menu=array(
	array('label'=>'Create Tipopedidosproveedores', 'url'=>array('create')),
	array('label'=>'Manage Tipopedidosproveedores', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>Tipopedidosproveedores</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
