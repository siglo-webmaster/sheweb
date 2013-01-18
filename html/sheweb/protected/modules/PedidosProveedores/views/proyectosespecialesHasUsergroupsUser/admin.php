<?php
/* @var $this ProyectosespecialesHasUsergroupsUserController */
/* @var $model ProyectosespecialesHasUsergroupsUser */

$this->breadcrumbs=array(
	'Proyectosespeciales Has Usergroups Users'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List ProyectosespecialesHasUsergroupsUser', 'url'=>array('index')),
	array('label'=>'Create ProyectosespecialesHasUsergroupsUser', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('proyectosespeciales-has-usergroups-user-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>Manage Proyectosespeciales Has Usergroups Users</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'proyectosespeciales-has-usergroups-user-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idproyectosespeciales_has_usergroups_user',
		'proyectosespeciales_idproyectosespeciales',
		'usergroups_user_id',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
