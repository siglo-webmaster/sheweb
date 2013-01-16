<?php
/* @var $this ProyectosespecialesHasUsergroupsUserController */
/* @var $model ProyectosespecialesHasUsergroupsUser */

$this->breadcrumbs=array(
	'Proyectosespeciales Has Usergroups Users'=>array('index'),
	$model->idproyectosespeciales_has_usergroups_user=>array('view','id'=>$model->idproyectosespeciales_has_usergroups_user),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProyectosespecialesHasUsergroupsUser', 'url'=>array('index')),
	array('label'=>'Create ProyectosespecialesHasUsergroupsUser', 'url'=>array('create')),
	array('label'=>'View ProyectosespecialesHasUsergroupsUser', 'url'=>array('view', 'id'=>$model->idproyectosespeciales_has_usergroups_user)),
	array('label'=>'Manage ProyectosespecialesHasUsergroupsUser', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>Update ProyectosespecialesHasUsergroupsUser <?php echo $model->idproyectosespeciales_has_usergroups_user; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>