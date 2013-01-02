<?php
/* @var $this ItemController */
/* @var $model Item */

$this->breadcrumbs=array(
	'Items'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Item', 'url'=>array('index')),
	array('label'=>'Manage Item', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>Create Item</h1>

<?php echo $this->renderPartial('_form', array('item'=>$item,'item_has_categoria'=>$item_has_categoria,'item_has_autor'=>$item_has_autor, 'item_has_tipoformato'=>$item_has_tipoformato)); ?>