<?php
/* @var $this PorcentajesreservasController */
/* @var $model Porcentajesreservas */

$this->breadcrumbs=array(
	'Porcentajesreservases'=>array('index'),
	$model->idporcentajesreservas,
);

$this->menu=array(
	array('label'=>'List Porcentajesreservas', 'url'=>array('index')),
	array('label'=>'Create Porcentajesreservas', 'url'=>array('create')),
	array('label'=>'Update Porcentajesreservas', 'url'=>array('update', 'id'=>$model->idporcentajesreservas)),
	array('label'=>'Delete Porcentajesreservas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idporcentajesreservas),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Porcentajesreservas', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>View Porcentajesreservas #<?php echo $model->idporcentajesreservas; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idporcentajesreservas',
                array('name'=>'usergroups_user_id','value'=>'$data->usergroupsUser->username'),
		'categoria_idcategoria',
		'editorial_ideditorial',
		'bodega_idbodega',
		'proyectosespeciales_idproyectosespeciales',
		'porcentaje',
		'prioridad',
	),
)); ?>
