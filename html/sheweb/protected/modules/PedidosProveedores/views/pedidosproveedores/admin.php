<?php
/* @var $this PedidosproveedoresController */
/* @var $model Pedidosproveedores */

$this->breadcrumbs=array(
	'Pedidosproveedores'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Listar Pedidos', 'url'=>array('index')),
	array('label'=>'Crear Pedido', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('pedidosproveedores-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>Administrar Pedidos</h1>

<?php
    echo "<div class='boton'>";
    echo CHtml::link("Nuevo pedido",Yii::app()->createUrl($this->module->id."/pedidosproveedores/create"));
    echo "</div>";
    
     echo "<div class='boton'>";
    echo CHtml::link("Listar pedidos",Yii::app()->createUrl($this->module->id."/pedidosproveedores/index"));
    echo "</div>";
?>
<hr class="separador_blanco">

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php 
   
    $this->widget('ext.groupgridview.GroupGridView', array(
	'id'=>'pedidosproveedores-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idpedidosproveedores',
		'estado',
                array(
                'class'=>'CLinkColumn',
                'header'=>'Especial',
                'label'=>'Clonar',
                'urlExpression'=>'Yii::app()->createUrl("/PedidosProveedores/pedidosproveedores/clone/id/".$data->idpedidosproveedores)',
                ),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
