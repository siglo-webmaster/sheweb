<?php
/* @var $this TipoformatoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipoformatos',
);

$this->menu=array(
	array('label'=>'Create Tipoformato', 'url'=>array('create')),
	array('label'=>'Manage Tipoformato', 'url'=>array('admin')),
);
?>

<h1>Tipoformatos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
