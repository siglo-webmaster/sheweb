<?php
/* @var $this BodegareservasestrellasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Bodegareservasestrellases',
);

$this->menu=array(
	array('label'=>'Create Bodegareservasestrellas', 'url'=>array('create')),
	array('label'=>'Manage Bodegareservasestrellas', 'url'=>array('admin')),
);
?>

<h1>Bodegareservasestrellases</h1>

<?php

$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
