<?php
/* @var $this ItemController */
/* @var $model Item */

$this->breadcrumbs=array(
	'Items'=>array('index'),
	$item->iditem=>array('view','id'=>$item->iditem),
	'Update',
);

$this->menu=array(
	array('label'=>'List Item', 'url'=>array('index')),
	array('label'=>'Create Item', 'url'=>array('create')),
	array('label'=>'View Item', 'url'=>array('view', 'id'=>$item->iditem)),
	array('label'=>'Manage Item', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>Update Item <?php echo $item->iditem; ?></h1>

<?php echo $this->renderPartial('_form', array('item'=>$item,
                                                'item_has_categoria'=>$item_has_categoria,
                                                'item_has_autor'=>$item_has_autor,
                                                'item_has_tipoformato'=>$item_has_tipoformato,
                                                'item_has_terceros'=>$item_has_terceros,
    )); 
?>