<?php
/* @var $this EstrellascategoriaeditorialController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Estrellascategoriaeditorials',
);

$this->menu=array(
	array('label'=>'Nuevo', 'url'=>array('create')),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>

<h1>Estrellas - Categorias - Editoriales</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
