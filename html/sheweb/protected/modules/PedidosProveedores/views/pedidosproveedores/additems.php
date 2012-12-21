<?php
/* @var $this PedidosproveedoresController */
/* @var $model Pedidosproveedores */

$this->breadcrumbs=array(
	'Pedidosproveedores'=>array('index'),
	$pedidosproveedores->idpedidosproveedores=>array('view','id'=>$pedidosproveedores->idpedidosproveedores),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pedidosproveedores', 'url'=>array('index'))
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>Administrar items de Pedido <?php echo $pedidosproveedores->idpedidosproveedores; ?></h1>

<?php echo $this->renderPartial('_additems', array('pedidosproveedores'=>$pedidosproveedores)); ?>