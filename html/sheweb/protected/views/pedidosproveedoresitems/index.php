<?php
/* @var $this PedidosproveedoresitemsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pedidosproveedoresitems',
);

$this->menu=array(
	array('label'=>'Create Pedidosproveedoresitems', 'url'=>array('create')),
	array('label'=>'Manage Pedidosproveedoresitems', 'url'=>array('admin')),
);
?>

<h1>Pedidosproveedoresitems</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
