<?php
/* @var $this PedidosproveedoresentradasalmacenController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pedidosproveedoresentradasalmacens',
);

$this->menu=array(
	array('label'=>'Create Pedidosproveedoresentradasalmacen', 'url'=>array('create')),
	array('label'=>'Manage Pedidosproveedoresentradasalmacen', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>Pedidos a Proveedores pendientes de entrada</h1>

<?php
        $this->widget('ext.groupgridview.GroupGridView', array(
                'id' => 'grid1',
                'dataProvider' => $dataProvider,
                 'columns' => array(
                  'idpedidosproveedores',
                  'nombreproveedor',
                  'fechaestimada',
                  'descripcion',
                  array('class' => 'CLinkColumn',
                        'header'=>'Accion',
                        'label'=>'Hacer entrada',
                        'urlExpression'=>'Yii::app()->createUrl("/PedidosProveedores/pedidosproveedoresentradasalmacen/create/id/".$data->idpedidosproveedores)',
                  ),
                ),
              ));
?>
