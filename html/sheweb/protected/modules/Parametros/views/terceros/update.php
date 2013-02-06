<?php
/* @var $this TercerosController */
/* @var $model Terceros */

$this->breadcrumbs=array(
	'Terceroses'=>array('index'),
	$model->idterceros=>array('view','id'=>$model->idterceros),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Terceros', 'url'=>array('index')),
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Ver Detalles', 'url'=>array('view', 'id'=>$model->idterceros)),
	array('label'=>'Administrar Terceros', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>Actualizar Tercero <?php echo $model->idterceros; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,'terceros_has_tiposterceros'=>$terceros_has_tiposterceros,'terceros_has_moneda'=>$terceros_has_moneda,)); ?>