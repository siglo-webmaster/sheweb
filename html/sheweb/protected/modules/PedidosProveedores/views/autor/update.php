<?php
/* @var $this AutorController */
/* @var $model Autor */

$this->breadcrumbs=array(
	'Autors'=>array('index'),
	$model->idautor=>array('view','id'=>$model->idautor),
	'Update',
);

$this->menu=array(
	array('label'=>'List Autor', 'url'=>array('index')),
	array('label'=>'Create Autor', 'url'=>array('create')),
	array('label'=>'View Autor', 'url'=>array('view', 'id'=>$model->idautor)),
	array('label'=>'Manage Autor', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>Update Autor <?php echo $model->idautor; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>