<?php
/* @var $this EstrellascategoriaeditorialController */
/* @var $model Estrellascategoriaeditorial */

$this->breadcrumbs=array(
	'Estrellascategoriaeditorials'=>array('index'),
	$model->idestrellascategoriaeditorial=>array('view','id'=>$model->idestrellascategoriaeditorial),
	'Update',
);

$this->menu=array(
	array('label'=>'List Estrellascategoriaeditorial', 'url'=>array('index')),
	array('label'=>'Create Estrellascategoriaeditorial', 'url'=>array('create')),
	array('label'=>'View Estrellascategoriaeditorial', 'url'=>array('view', 'id'=>$model->idestrellascategoriaeditorial)),
	array('label'=>'Manage Estrellascategoriaeditorial', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>

<h1>Update Estrellascategoriaeditorial <?php echo $model->idestrellascategoriaeditorial; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>