<?php
/* @var $this PedidosprovedoresdocumentosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pedidosprovedoresdocumentoses',
);

$this->menu=array(
	array('label'=>'Create Pedidosprovedoresdocumentos', 'url'=>array('create')),
	array('label'=>'Manage Pedidosprovedoresdocumentos', 'url'=>array('admin')),
);
?>

<h1>Pedidosprovedoresdocumentoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
