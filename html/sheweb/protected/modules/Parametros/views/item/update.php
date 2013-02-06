<?php
/* @var $this ItemController */
/* @var $model Item */

$this->breadcrumbs=array(
	'Items'=>array('index'),
	$item->iditem=>array('view','id'=>$item->iditem),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar productos', 'url'=>array('index')),
	array('label'=>'Crear productos', 'url'=>array('create')),
	array('label'=>'Ver detalles', 'url'=>array('view', 'id'=>$item->iditem)),
	array('label'=>'Administrar producto', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>Actualizar producto<?php echo $item->iditem; ?></h1>

<?php echo $this->renderPartial('_form', array('item'=>$item,
                                                'item_has_categoria'=>$item_has_categoria,
                                                'item_has_autor'=>$item_has_autor,
                                                'item_has_tipoformato'=>$item_has_tipoformato,
                                                'item_has_terceros'=>$item_has_terceros,
                                                'tipoitematributos'=>$tipoitematributos,
                                                'item_has_tipoitematributos'=>$item_has_tipoitematributos,
    )); 
?>