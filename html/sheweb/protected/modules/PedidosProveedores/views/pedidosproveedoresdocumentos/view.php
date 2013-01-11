<?php
/* @var $this PedidosproveedoresdocumentosController */
/* @var $model Pedidosproveedoresdocumentos */

$this->breadcrumbs=array(
	'Pedidosproveedoresdocumentoses'=>array('index'),
	$model->idpedidosproveedoresdocumentos,
);

$this->menu=array(
	array('label'=>'List Pedidosproveedoresdocumentos', 'url'=>array('index')),
	array('label'=>'Create Pedidosproveedoresdocumentos', 'url'=>array('create')),
	array('label'=>'Update Pedidosproveedoresdocumentos', 'url'=>array('update', 'id'=>$model->idpedidosproveedoresdocumentos)),
	array('label'=>'Delete Pedidosproveedoresdocumentos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idpedidosproveedoresdocumentos),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pedidosproveedoresdocumentos', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>View Pedidosproveedoresdocumentos #<?php echo $model->idpedidosproveedoresdocumentos; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idpedidosproveedoresdocumentos',
		'pedidosproveedores_idpedidosproveedores',
		'tiposdocumentosanexos_idtiposdocumentosanexos',
		'url',
		'nombre',
	),
)); ?>
