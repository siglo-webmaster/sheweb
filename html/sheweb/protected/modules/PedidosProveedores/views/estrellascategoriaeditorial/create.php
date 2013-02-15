<?php
/* @var $this EstrellascategoriaeditorialController */
/* @var $model Estrellascategoriaeditorial */

$this->breadcrumbs=array(
	'Estrellascategoriaeditorials'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Estrellascategoriaeditorial', 'url'=>array('index')),
	array('label'=>'Manage Estrellascategoriaeditorial', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>Create Estrellascategoriaeditorial</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>