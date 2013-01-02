<?php
/* @var $this PedidosproveedoresitemdetallereservaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pedidosproveedoresitemdetallereservas',
);

$this->menu=array(
	array('label'=>'Create Pedidosproveedoresitemdetallereserva', 'url'=>array('create')),
	array('label'=>'Manage Pedidosproveedoresitemdetallereserva', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>Pedidosproveedoresitemdetallereservas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
