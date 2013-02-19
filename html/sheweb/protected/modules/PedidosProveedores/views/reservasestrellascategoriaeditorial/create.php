<?php
/* @var $this ReservasestrellascategoriaeditorialController */
/* @var $model Reservasestrellascategoriaeditorial */

$this->breadcrumbs=array(
	'Reservasestrellascategoriaeditorials'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Reservasestrellascategoriaeditorial', 'url'=>array('index')),
	array('label'=>'Manage Reservasestrellascategoriaeditorial', 'url'=>array('admin')),
);
?>

<h1>Create Reservasestrellascategoriaeditorial</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>