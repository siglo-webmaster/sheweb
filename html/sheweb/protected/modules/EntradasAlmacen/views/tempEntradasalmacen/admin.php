<?php
/* @var $this TempEntradasalmacenController */
/* @var $model TempEntradasalmacen */

$this->breadcrumbs=array(
	'Temp Entradasalmacens'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List TempEntradasalmacen', 'url'=>array('index')),
	array('label'=>'Create TempEntradasalmacen', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('temp-entradasalmacen-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>Manage Temp Entradasalmacens</h1>

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
	'id'=>'temp-entradasalmacen-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idtemp_entradasalmacen',
		'documentoproveedor',
		'observaciones',
		'bodega_idbodega',
		'pedidosproveedores_idpedidosproveedores',
		'usergroups_user_id',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
