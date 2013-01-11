<?php
/* @var $this PedidosproveedoresdocumentosController */
/* @var $model Pedidosproveedoresdocumentos */

$this->breadcrumbs=array(
	'Pedidosproveedoresdocumentoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Pedidosproveedoresdocumentos', 'url'=>array('index')),
	array('label'=>'Manage Pedidosproveedoresdocumentos', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>Create Pedidosproveedoresdocumentos</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,'idpedidosproveedores'=>$idpedidosproveedores)); ?>