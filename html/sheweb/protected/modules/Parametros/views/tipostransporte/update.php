<?php
/* @var $this TipostransporteController */
/* @var $model Tipostransporte */

$this->breadcrumbs=array(
	'Tipostransportes'=>array('index'),
	$model->idtipostransporte=>array('view','id'=>$model->idtipostransporte),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tipostransporte', 'url'=>array('index')),
	array('label'=>'Create Tipostransporte', 'url'=>array('create')),
	array('label'=>'View Tipostransporte', 'url'=>array('view', 'id'=>$model->idtipostransporte)),
	array('label'=>'Manage Tipostransporte', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>Update Tipostransporte <?php echo $model->idtipostransporte; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>