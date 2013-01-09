<?php
/* @var $this EditorialController */
/* @var $model Editorial */

$this->breadcrumbs=array(
	'Editorials'=>array('index'),
	$model->ideditorial=>array('view','id'=>$model->ideditorial),
	'Update',
);

$this->menu=array(
	array('label'=>'List Editorial', 'url'=>array('index')),
	array('label'=>'Create Editorial', 'url'=>array('create')),
	array('label'=>'View Editorial', 'url'=>array('view', 'id'=>$model->ideditorial)),
	array('label'=>'Manage Editorial', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>

<h1>Update Editorial <?php echo $model->ideditorial; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>