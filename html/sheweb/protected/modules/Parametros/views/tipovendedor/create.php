<?php
/* @var $this TipovendedorController */
/* @var $model Tipovendedor */

$this->breadcrumbs=array(
	'Tipovendedors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Tipovendedor', 'url'=>array('index')),
	array('label'=>'Manage Tipovendedor', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>Create Tipovendedor</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>