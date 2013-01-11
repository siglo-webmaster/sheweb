<?php
/* @var $this TipopedidosproveedoresController */
/* @var $model Tipopedidosproveedores */

$this->breadcrumbs=array(
	'Tipopedidosproveedores'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Tipopedidosproveedores', 'url'=>array('index')),
	array('label'=>'Manage Tipopedidosproveedores', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>Create Tipopedidosproveedores</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>