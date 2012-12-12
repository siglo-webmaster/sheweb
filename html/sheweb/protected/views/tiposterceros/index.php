<?php
/* @var $this TipostercerosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tiposterceroses',
);

$this->menu=array(
	array('label'=>'Create Tiposterceros', 'url'=>array('create')),
	array('label'=>'Manage Tiposterceros', 'url'=>array('admin')),
);
?>

<h1>Tiposterceroses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
