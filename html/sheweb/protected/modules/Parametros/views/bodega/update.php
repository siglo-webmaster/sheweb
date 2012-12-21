<?php
/* @var $this BodegaController */
/* @var $model Bodega */

$this->breadcrumbs=array(
	'Bodegas'=>array('index'),
	$model->idbodega=>array('view','id'=>$model->idbodega),
	'Update',
);

$this->menu=array(
	array('label'=>'List Bodega', 'url'=>array('index')),
	array('label'=>'Create Bodega', 'url'=>array('create')),
	array('label'=>'View Bodega', 'url'=>array('view', 'id'=>$model->idbodega)),
	array('label'=>'Manage Bodega', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>Update Bodega <?php echo $model->idbodega; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>