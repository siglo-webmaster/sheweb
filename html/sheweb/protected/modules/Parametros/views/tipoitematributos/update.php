<?php
/* @var $this TipoitematributosController */
/* @var $model Tipoitematributos */

$this->breadcrumbs=array(
	'Tipoitematributoses'=>array('index'),
	$model->idtipoitematributos=>array('view','id'=>$model->idtipoitematributos),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tipoitematributos', 'url'=>array('index')),
	array('label'=>'Create Tipoitematributos', 'url'=>array('create')),
	array('label'=>'View Tipoitematributos', 'url'=>array('view', 'id'=>$model->idtipoitematributos)),
	array('label'=>'Manage Tipoitematributos', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>Actualizar tipos de atributos<?php echo $model->idtipoitematributos; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>