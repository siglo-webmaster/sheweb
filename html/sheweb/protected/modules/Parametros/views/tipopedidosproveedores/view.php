<?php
/* @var $this TipopedidosproveedoresController */
/* @var $model Tipopedidosproveedores */

$this->breadcrumbs=array(
	'Tipopedidosproveedores'=>array('index'),
	$model->idtipopedidosproveedores,
);

$this->menu=array(
	array('label'=>'List Tipopedidosproveedores', 'url'=>array('index')),
	array('label'=>'Create Tipopedidosproveedores', 'url'=>array('create')),
	array('label'=>'Update Tipopedidosproveedores', 'url'=>array('update', 'id'=>$model->idtipopedidosproveedores)),
	array('label'=>'Delete Tipopedidosproveedores', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idtipopedidosproveedores),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tipopedidosproveedores', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>View Tipopedidosproveedores #<?php echo $model->idtipopedidosproveedores; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idtipopedidosproveedores',
		'nombre',
	),
)); ?>
