<?php
/* @var $this TipovendedorController */
/* @var $model Tipovendedor */

$this->breadcrumbs=array(
	'Tipovendedors'=>array('index'),
	$model->idtipovendedor=>array('view','id'=>$model->idtipovendedor),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tipovendedor', 'url'=>array('index')),
	array('label'=>'Create Tipovendedor', 'url'=>array('create')),
	array('label'=>'View Tipovendedor', 'url'=>array('view', 'id'=>$model->idtipovendedor)),
	array('label'=>'Manage Tipovendedor', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>Update Tipovendedor <?php echo $model->idtipovendedor; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>