<?php
/* @var $this ProyectosespecialesHasUsergroupsUserController */
/* @var $model ProyectosespecialesHasUsergroupsUser */

$this->breadcrumbs=array(
	'Proyectosespeciales Has Usergroups Users'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProyectosespecialesHasUsergroupsUser', 'url'=>array('index')),
	array('label'=>'Manage ProyectosespecialesHasUsergroupsUser', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>Create ProyectosespecialesHasUsergroupsUser</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>