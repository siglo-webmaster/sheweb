<?php
/* @var $this TempEntradasalmacendetalleController */
/* @var $model TempEntradasalmacendetalle */

$this->breadcrumbs=array(
	'Temp Entradasalmacendetalles'=>array('index'),
	$model->idtemp_entradasalmacendetalle,
);

$this->menu=array(
	array('label'=>'List TempEntradasalmacendetalle', 'url'=>array('index')),
	array('label'=>'Create TempEntradasalmacendetalle', 'url'=>array('create')),
	array('label'=>'Update TempEntradasalmacendetalle', 'url'=>array('update', 'id'=>$model->idtemp_entradasalmacendetalle)),
	array('label'=>'Delete TempEntradasalmacendetalle', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idtemp_entradasalmacendetalle),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TempEntradasalmacendetalle', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>View TempEntradasalmacendetalle #<?php echo $model->idtemp_entradasalmacendetalle; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idtemp_entradasalmacendetalle',
		'pedidosproveedoresitems_idpedidosproveedoresitems',
		'temp_entradasalmacen_idtemp_entradasalmacen',
		'recibido',
		'fallado',
		'observacionesfallado',
		'finalizar',
	),
)); ?>
