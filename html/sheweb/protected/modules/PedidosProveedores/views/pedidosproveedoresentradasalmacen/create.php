<?php
/* @var $this PedidosproveedoresentradasalmacenController */
/* @var $model Pedidosproveedoresentradasalmacen */

$this->breadcrumbs=array(
	'Pedidosproveedoresentradasalmacens'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Pedidosproveedoresentradasalmacen', 'url'=>array('index')),
	array('label'=>'Manage Pedidosproveedoresentradasalmacen', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>Crear entrada de Almacen</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,'items'=>$items,'idpedidosproveedores'=>$idpedidosproveedores)); ?>