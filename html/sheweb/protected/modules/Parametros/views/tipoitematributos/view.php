<?php
/* @var $this TipoitematributosController */
/* @var $model Tipoitematributos */

$this->breadcrumbs=array(
	'Tipoitematributoses'=>array('index'),
	$model->idtipoitematributos,
);

$this->menu=array(
	array('label'=>'Listar tipos de atributos', 'url'=>array('index')),
	array('label'=>'Crear nuevo atributo', 'url'=>array('create')),
	array('label'=>'Editar', 'url'=>array('update', 'id'=>$model->idtipoitematributos)),
	array('label'=>'Borrar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idtipoitematributos),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar tipos de atributos', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>Tipo de atributo #<?php echo $model->idtipoitematributos; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idtipoitematributos',
		'nombre',
                'tipodato',
	),
)); ?>
