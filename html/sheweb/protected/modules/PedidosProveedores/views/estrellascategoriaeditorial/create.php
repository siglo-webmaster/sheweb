<?php
/* @var $this EstrellascategoriaeditorialController */
/* @var $model Estrellascategoriaeditorial */

$this->breadcrumbs=array(
	'Estrellascategoriaeditorials'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>

<h1>Crear asociacion de Estrellas - Categorias -Editoriales</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>