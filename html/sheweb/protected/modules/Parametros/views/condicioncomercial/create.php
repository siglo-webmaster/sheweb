<?php
/* @var $this CondicioncomercialController */
/* @var $model Condicioncomercial */

$this->breadcrumbs=array(
	'Condicioncomercials'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Condicioncomercial', 'url'=>array('index')),
	array('label'=>'Manage Condicioncomercial', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>Create Condicioncomercial</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>