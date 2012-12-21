<?php
/* @var $this PedidosproveedoresController */
/* @var $model Pedidosproveedores */

$this->breadcrumbs=array(
	'Pedidosproveedores'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Pedidos a proveedores', 'url'=>array('index')),
	array('label'=>'Manejar Pedidos a proveedores', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>Create Pedidosproveedores</h1>

<?php echo $this->renderPartial('_form', array('pedidosproveedores'=>$pedidosproveedores,'pedidosproveedoresdocumentos'=>$pedidosproveedoresdocumentos)); ?>