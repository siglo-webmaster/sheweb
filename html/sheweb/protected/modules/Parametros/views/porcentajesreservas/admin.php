<?php
/* @var $this PorcentajesreservasController */
/* @var $model Porcentajesreservas */

$this->breadcrumbs=array(
	'Porcentajesreservases'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Porcentajesreservas', 'url'=>array('index')),
	array('label'=>'Create Porcentajesreservas', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('porcentajesreservas-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>Manage Porcentajesreservases</h1>

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
	'id'=>'porcentajesreservas-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idporcentajesreservas',
		'usergroups_user_id',
                array(
                     'name'=>'usergroupsUser.username',
                    'header'=>'username', 
                    'value'=>'$data->usergroupsUser->username',
                    
                    ),
		'categoria_idcategoria',
                 array(
                     'name'=>'categoriaIdcategoria.nombre',
                    'header'=>'categoria', 
                    'value'=>'$data->categoriaIdcategoria->nombre',
                    
                    ),
		'editorial_ideditorial',
                array(
                     'name'=>'editorialIdeditorial.nombre',
                    'header'=>'editorial', 
                    'value'=>'$data->editorialIdeditorial->nombre',
                    
                    ),
                'bodega_idbodega',
                array(
                     'name'=>'bodegaIdbodega.nombre',
                    'header'=>'bodega', 
                    'value'=>'(isset($data->bodegaIdbodega->nombre))?$data->bodegaIdbodega->nombre:"" ',
                    
                    ),
		'porcentaje',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
