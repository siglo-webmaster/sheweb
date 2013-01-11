<?php
/* @var $this TiposdocumentosanexosController */
/* @var $model Tiposdocumentosanexos */

$this->breadcrumbs=array(
	'Tiposdocumentosanexoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Tiposdocumentosanexos', 'url'=>array('index')),
	array('label'=>'Manage Tiposdocumentosanexos', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>Create Tiposdocumentosanexos</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>