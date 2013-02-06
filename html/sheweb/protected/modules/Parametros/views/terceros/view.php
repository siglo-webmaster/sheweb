<?php
/* @var $this TercerosController */
/* @var $model Terceros */

$this->breadcrumbs=array(
	'Terceroses'=>array('index'),
	$model->idterceros,
);

$this->menu=array(
	array('label'=>'Listar Terceros', 'url'=>array('index')),
	array('label'=>'Crear Terceros', 'url'=>array('create')),
	array('label'=>'Editar', 'url'=>array('update', 'id'=>$model->idterceros)),
	array('label'=>'Borrar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idterceros),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Terceros', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>Detalle de tercero #<?php echo $model->idterceros; ?></h1>

<?php
    echo $this->renderPartial('_view', array('data'=>$model));
?>

<?php 
/*
$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idterceros',
		'tiposidentificacion_idtiposidentificacion',
		'ciudad_idciudad',
		'nombre',
		'identificacion',
		'telefono',
		'email',
		'contacto',
		'telefonocontacto',
		'direccion',
		'estado',
	),
)); 
*/
?>
