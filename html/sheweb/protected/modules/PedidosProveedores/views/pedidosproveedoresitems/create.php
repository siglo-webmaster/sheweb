<?php
/* @var $this PedidosproveedoresitemsController */
/* @var $model Pedidosproveedoresitems */
/*
$this->breadcrumbs=array(
	'Pedidosproveedoresitems'=>array('index'),
	'Create',
);*/
/*
$this->menu=array(
	array('label'=>'List Pedidosproveedoresitems', 'url'=>array('index')),
	array('label'=>'Manage Pedidosproveedoresitems', 'url'=>array('admin')),
);
 * 
 */
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>Create Pedidosproveedoresitems</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,'pedidosproveedores_idpedidosproveedores'=>$pedidosproveedores_idpedidosproveedores)); ?>