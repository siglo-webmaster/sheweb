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

<?php
     $this->widget('ext.mPrint.mPrint', array(
                                        'title' => 'Siglo del Hombre Editores S.A.',        //the title of the document. Defaults to the HTML title
                                        'tooltip' => 'Imprimir',    //tooltip message of the print icon. Defaults to 'print'
                                        'text' => NULL, //text which will appear beside the print icon. Defaults to NULL
                                        'element' => '#pedido',      //the element to be printed.
                                        'exceptions' => array(     //the element/s which will be ignored
                                            '.summary',
                                            '.search-form',
                                            '#ver-opciones',
                                        ),
                                        'publishCss' => true       //publish the CSS for the whole page?
                                    ));

?>
<div id='pedido'>
    

<h1>Detalle de reservaciones para el pedido # <?php echo $idpedidosproveedores; ?></h1>



<?php 
echo "<div id='ver-opciones'>";

echo CHtml::link("[ Nueva Reserva ]", Yii::app()->createUrl("/PedidosProveedores/pedidosproveedoresitemdetallereserva/create", array("idpedidosproveedoresitems"=>$idpedidosproveedoresitems)));
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo CHtml::link(" [ Regresar al pedido ]", Yii::app()->createUrl("/PedidosProveedores/pedidosproveedores/view/id/".$idpedidosproveedores));

echo "</div>";

$this->widget('ext.groupgridview.GroupGridView', array(
                'id' => 'grid1',
                'dataProvider' => $dataProvider,
                 'columns' => array(
                  'nombrebodega',
                  'nombre',
                  'username',
                  'reservado',
                  'proyectosespeciales',
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

</div>