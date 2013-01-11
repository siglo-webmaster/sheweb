<?php
/* @var $this TiposdocumentosanexosController */
/* @var $model Tiposdocumentosanexos */

$this->breadcrumbs=array(
	'Tiposdocumentosanexoses'=>array('index'),
	$model->idtiposdocumentosanexos=>array('view','id'=>$model->idtiposdocumentosanexos),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tiposdocumentosanexos', 'url'=>array('index')),
	array('label'=>'Create Tiposdocumentosanexos', 'url'=>array('create')),
	array('label'=>'View Tiposdocumentosanexos', 'url'=>array('view', 'id'=>$model->idtiposdocumentosanexos)),
	array('label'=>'Manage Tiposdocumentosanexos', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>Update Tiposdocumentosanexos <?php echo $model->idtiposdocumentosanexos; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>