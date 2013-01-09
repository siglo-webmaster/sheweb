<?php
/* @var $this CondicioncomercialController */
/* @var $model Condicioncomercial */

$this->breadcrumbs=array(
	'Condicioncomercials'=>array('index'),
	$model->idcondicioncomercial=>array('view','id'=>$model->idcondicioncomercial),
	'Update',
);

$this->menu=array(
	array('label'=>'List Condicioncomercial', 'url'=>array('index')),
	array('label'=>'Create Condicioncomercial', 'url'=>array('create')),
	array('label'=>'View Condicioncomercial', 'url'=>array('view', 'id'=>$model->idcondicioncomercial)),
	array('label'=>'Manage Condicioncomercial', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>Update Condicioncomercial <?php echo $model->idcondicioncomercial; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>