<?php
/* @var $this ItemController */
/* @var $model Item */

$this->breadcrumbs=array(
	'Items'=>array('index'),
	$model->iditem,
);

$this->menu=array(
	array('label'=>'Listar productos', 'url'=>array('index')),
	array('label'=>'Crear producto', 'url'=>array('create')),
	array('label'=>'Editar', 'url'=>array('update', 'id'=>$model->iditem)),
	array('label'=>'Borrar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->iditem),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Productos', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>Producto #<?php echo $model->iditem; ?></h1>

<?php 
 echo $this->renderPartial('_view',array('data'=>$model));
?>
<?php /*$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'iditem',
		'editorial_ideditorial',
		'nombre',
		'isbn',
		'barcode',
                'codigosiglo',
		'fechaedicion',
		'fechacreacion',
		'temporal',
		'estado',
	),
)); 
 * 
 * 
 */
?>