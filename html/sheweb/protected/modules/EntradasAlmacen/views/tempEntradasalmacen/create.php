<?php
/* @var $this TempEntradasalmacenController */
/* @var $model TempEntradasalmacen */

$this->breadcrumbs=array(
	'Temp Entradasalmacens'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TempEntradasalmacen', 'url'=>array('index')),
	array('label'=>'Manage TempEntradasalmacen', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>Crear entrada de almacen agil</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,'idpedidosproveedores'=>$idpedidosproveedores)); ?>