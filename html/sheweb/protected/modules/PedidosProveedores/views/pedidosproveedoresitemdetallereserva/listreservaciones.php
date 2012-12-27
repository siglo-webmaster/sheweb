<?php
/* @var $this PedidosproveedoresitemdetallereservaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pedidosproveedoresitemdetallereservas',
);

$this->menu=array(
	array('label'=>'Create Pedidosproveedoresitemdetallereserva', 'url'=>array('create')),
	array('label'=>'Manage Pedidosproveedoresitemdetallereserva', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>Detalle de reservaciones para el pedido # <?php echo $idpedidosproveedores; ?></h1>

<?php 
echo CHtml::link("[ Nueva Reserva ]", Yii::app()->createUrl("/PedidosProveedores/pedidosproveedoresitemdetallereserva/create", array("idpedidosproveedoresitems"=>$idpedidosproveedoresitems)));
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo CHtml::link(" [ Regresar al pedido ]", Yii::app()->createUrl("/PedidosProveedores/pedidosproveedores/view/id/".$idpedidosproveedores));
$this->widget('ext.groupgridview.GroupGridView', array(
                'id' => 'grid1',
                'dataProvider' => $dataProvider,
                 'columns' => array(
                  'nombrebodega',
                  'nombre',
                  'username',
                  'reservado',
                    array('class' => 'CButtonColumn',
                       'header'=>'Opciones',
                       'template'=>'{update}{delete}',
                       'buttons'=>array(
                                           'update'=>array('url'=>'Yii::app()->createUrl("/PedidosProveedores/pedidosproveedoresitemdetallereserva/update", array("id"=>$data->idpedidosproveedoresitemdetallereserva))'),
                                           'delete'=>array('url'=>'Yii::app()->createUrl("/PedidosProveedores/pedidosproveedoresitemdetallereserva/delete", array("id"=>$data->idpedidosproveedoresitemdetallereserva))'),
                                       ),
                     ),
                ),
              ));
?>
