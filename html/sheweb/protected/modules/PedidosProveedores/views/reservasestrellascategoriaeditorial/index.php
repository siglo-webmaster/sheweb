<?php
/* @var $this ReservasestrellascategoriaeditorialController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Reservasestrellascategoriaeditorials',
);

$this->menu=array(
	array('label'=>'Create Reservasestrellascategoriaeditorial', 'url'=>array('create')),
	array('label'=>'Manage Reservasestrellascategoriaeditorial', 'url'=>array('admin')),
);
?>

<h1>Reservasestrellascategoriaeditorials</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
