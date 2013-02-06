<?php
/* @var $this ProyectosespecialesHasUsergroupsUserController */
/* @var $model ProyectosespecialesHasUsergroupsUser */

$this->breadcrumbs=array(
	'Proyectosespeciales Has Usergroups Users'=>array('index'),
	$model->idproyectosespeciales_has_usergroups_user,
);

$this->menu=array(
	array('label'=>'List ProyectosespecialesHasUsergroupsUser', 'url'=>array('index')),
	array('label'=>'Create ProyectosespecialesHasUsergroupsUser', 'url'=>array('create')),
	array('label'=>'Update ProyectosespecialesHasUsergroupsUser', 'url'=>array('update', 'id'=>$model->idproyectosespeciales_has_usergroups_user)),
	array('label'=>'Delete ProyectosespecialesHasUsergroupsUser', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idproyectosespeciales_has_usergroups_user),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProyectosespecialesHasUsergroupsUser', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>Usuarios por proyecto especial #<?php echo $model->idproyectosespeciales_has_usergroups_user; ?></h1>

<?php  
    echo $this->renderPartial('_view',array('data'=>$model));
?>

<?php 
/*
$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idproyectosespeciales_has_usergroups_user',
		'proyectosespeciales_idproyectosespeciales',
		'usergroups_user_id',
	),
)); 
 */ 
  ?>
 
