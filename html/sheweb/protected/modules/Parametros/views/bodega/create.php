<?php
/* @var $this BodegaController */
/* @var $model Bodega */

$this->breadcrumbs=array(
	'Bodegas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Bodega', 'url'=>array('index')),
	array('label'=>'Manage Bodega', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>Create Bodega</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>