<?php
/* @var $this PedidosproveedoresController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pedidosproveedores',
);

$this->menu=array(
	array('label'=>'Crear Pedido', 'url'=>array('create')),
	array('label'=>'Administrar Pedidos', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>Pedidos a proveedores</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
