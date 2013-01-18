<?php
/* @var $this PorcentajesreservasController */
/* @var $model Porcentajesreservas */

$this->breadcrumbs=array(
	'Porcentajesreservases'=>array('index'),
	$model->idporcentajesreservas=>array('view','id'=>$model->idporcentajesreservas),
	'Update',
);

$this->menu=array(
	array('label'=>'List Porcentajesreservas', 'url'=>array('index')),
	array('label'=>'Create Porcentajesreservas', 'url'=>array('create')),
	array('label'=>'View Porcentajesreservas', 'url'=>array('view', 'id'=>$model->idporcentajesreservas)),
	array('label'=>'Manage Porcentajesreservas', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>Update Porcentajesreservas <?php echo $model->idporcentajesreservas; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>