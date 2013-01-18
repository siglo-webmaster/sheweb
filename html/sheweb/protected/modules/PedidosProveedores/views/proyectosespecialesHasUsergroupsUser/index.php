<?php
/* @var $this ProyectosespecialesHasUsergroupsUserController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Proyectosespeciales Has Usergroups Users',
);

$this->menu=array(
	array('label'=>'Create ProyectosespecialesHasUsergroupsUser', 'url'=>array('create')),
	array('label'=>'Manage ProyectosespecialesHasUsergroupsUser', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>Proyectosespeciales Has Usergroups Users</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
