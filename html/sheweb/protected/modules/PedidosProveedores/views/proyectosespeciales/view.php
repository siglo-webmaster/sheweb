<?php
/* @var $this ProyectosespecialesController */
/* @var $model Proyectosespeciales */

$this->breadcrumbs=array(
	'Proyectosespeciales'=>array('index'),
	$model->idproyectosespeciales,
);

$this->menu=array(
	array('label'=>'Listar Proyectosespeciales', 'url'=>array('index')),
	array('label'=>'Crear Proyectosespecial', 'url'=>array('create')),
	array('label'=>'Editar', 'url'=>array('update', 'id'=>$model->idproyectosespeciales)),
	array('label'=>'Borrar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idproyectosespeciales),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Proyectosespeciales', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>Proyecto especial #<?php echo $model->idproyectosespeciales; ?></h1>

<?php 
    
echo $this->renderPartial('_view', array('data'=>$model));

?>

<?php 
/*
$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idproyectosespeciales',
		'idcliente',
		'idusuariocreacion',
		'nombre',
		'fechainicio',
		'fechacierre',
		'observaciones',
		'estado',
	),
)); 
*/
?>
