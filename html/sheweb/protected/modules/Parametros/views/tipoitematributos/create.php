<?php
/* @var $this TipoitematributosController */
/* @var $model Tipoitematributos */

$this->breadcrumbs=array(
	'Tipoitematributoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar tipos de atributos', 'url'=>array('index')),
	array('label'=>'Administrar tipos de atributos', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>Crear nuevo tipo de atributo para producto</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>