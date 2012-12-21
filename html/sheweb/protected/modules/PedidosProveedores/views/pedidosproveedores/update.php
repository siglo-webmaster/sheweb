<?php
/* @var $this PedidosproveedoresController */
/* @var $model Pedidosproveedores */

$this->breadcrumbs=array(
	'Pedidosproveedores'=>array('index'),
	$pedidosproveedores->idpedidosproveedores=>array('view','id'=>$pedidosproveedores->idpedidosproveedores),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pedidosproveedores', 'url'=>array('index')),
	array('label'=>'Create Pedidosproveedores', 'url'=>array('create')),
	array('label'=>'View Pedidosproveedores', 'url'=>array('view', 'id'=>$pedidosproveedores->idpedidosproveedores)),
	array('label'=>'Manage Pedidosproveedores', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>Update Pedidosproveedores <?php echo $pedidosproveedores->idpedidosproveedores; ?></h1>

<?php echo $this->renderPartial('_form', array('pedidosproveedores'=>$pedidosproveedores,'pedidosproveedoresdocumentos'=>$pedidosproveedoresdocumentos)); ?>