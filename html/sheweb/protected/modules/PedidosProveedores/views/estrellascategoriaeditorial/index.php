<?php
/* @var $this EstrellascategoriaeditorialController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Estrellascategoriaeditorials',
);

$this->menu=array(
	array('label'=>'Create Estrellascategoriaeditorial', 'url'=>array('create')),
	array('label'=>'Manage Estrellascategoriaeditorial', 'url'=>array('admin')),
);
?>

<h1>Estrellascategoriaeditorials</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
