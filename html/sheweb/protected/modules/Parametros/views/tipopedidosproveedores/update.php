<?php
/* @var $this TipopedidosproveedoresController */
/* @var $model Tipopedidosproveedores */

$this->breadcrumbs=array(
	'Tipopedidosproveedores'=>array('index'),
	$model->idtipopedidosproveedores=>array('view','id'=>$model->idtipopedidosproveedores),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tipopedidosproveedores', 'url'=>array('index')),
	array('label'=>'Create Tipopedidosproveedores', 'url'=>array('create')),
	array('label'=>'View Tipopedidosproveedores', 'url'=>array('view', 'id'=>$model->idtipopedidosproveedores)),
	array('label'=>'Manage Tipopedidosproveedores', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>Update Tipopedidosproveedores <?php echo $model->idtipopedidosproveedores; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>