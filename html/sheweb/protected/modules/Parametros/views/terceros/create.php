<?php
/* @var $this TercerosController */
/* @var $model Terceros */

$this->breadcrumbs=array(
	'Terceroses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Terceros', 'url'=>array('index')),
	array('label'=>'Manage Terceros', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>Create Terceros</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,'terceros_has_tiposterceros'=>$terceros_has_tiposterceros,)); ?>