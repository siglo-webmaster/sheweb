<?php
/* @var $this PedidosproveedoresentradasalmacenController */
/* @var $model Pedidosproveedoresentradasalmacen */

$this->breadcrumbs=array(
	'Pedidosproveedoresentradasalmacens'=>array('index'),
	$model->idpedidosproveedoresentradasalmacen=>array('view','id'=>$model->idpedidosproveedoresentradasalmacen),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pedidosproveedoresentradasalmacen', 'url'=>array('index')),
	array('label'=>'Create Pedidosproveedoresentradasalmacen', 'url'=>array('create')),
	array('label'=>'View Pedidosproveedoresentradasalmacen', 'url'=>array('view', 'id'=>$model->idpedidosproveedoresentradasalmacen)),
	array('label'=>'Manage Pedidosproveedoresentradasalmacen', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>Update Pedidosproveedoresentradasalmacen <?php echo $model->idpedidosproveedoresentradasalmacen; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>