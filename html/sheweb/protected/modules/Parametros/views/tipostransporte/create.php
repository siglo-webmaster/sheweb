<?php
/* @var $this TipostransporteController */
/* @var $model Tipostransporte */

$this->breadcrumbs=array(
	'Tipostransportes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Tipostransporte', 'url'=>array('index')),
	array('label'=>'Manage Tipostransporte', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>Create Tipostransporte</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>