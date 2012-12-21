<?php
/* @var $this TipoformatoController */
/* @var $model Tipoformato */

$this->breadcrumbs=array(
	'Tipoformatos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Tipoformato', 'url'=>array('index')),
	array('label'=>'Manage Tipoformato', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>Create Tipoformato</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>