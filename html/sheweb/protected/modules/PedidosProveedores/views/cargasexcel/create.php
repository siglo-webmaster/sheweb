<?php
/* @var $this CargasexcelController */
/* @var $model Cargasexcel */

$this->breadcrumbs=array(
	'Cargasexcels'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Cargasexcel', 'url'=>array('index')),
	array('label'=>'Manage Cargasexcel', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>Hacer carga de exel de novedades para el pedido # <?php echo $pedidosproveedores_idpedidosproveedores; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,'pedidosproveedores_idpedidosproveedores'=>$pedidosproveedores_idpedidosproveedores)); ?>