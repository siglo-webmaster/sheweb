<?php
/* @var $this PedidosproveedoresController */

?>
<?php
      if($data->estado=='aprobado'){
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
      }
       
 
?>

<?php
    $separador="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";

?>
<div class="view" id="pedido">

	<b><h3>Pedido a proveedores #<?php echo $data->idpedidosproveedores; ?></h3></b>
	        
        <b><?php echo CHtml::encode($data->getAttributeLabel('ESTADO')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
        <?php echo $separador; ?>
        
	<b><?php echo CHtml::encode($data->getAttributeLabel('usuariocreacion')); ?>:</b>
	<?php 
                if(isset($data->usuariocreacion0->username)){
                    echo CHtml::encode($data->usuariocreacion0->username);
                }
        ?>
	<?php echo $separador; ?>

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuarioaprobacion')); ?>:</b>
	<?php 
            if(isset($data->usuarioaprobacion0->username)){
                echo CHtml::encode($data->usuarioaprobacion0->username); 
            }
         ?>
        <?php echo $separador; ?>
        <div id='ver-opciones'>
        <?php echo CHtml::link("Ver opciones ", array('view', 'id'=>$data->idpedidosproveedores)); ?>
        </div>
        
	<br />
        
	<b><?php echo CHtml::encode($data->getAttributeLabel('idproveedor')); ?>:</b>
	<?php echo CHtml::encode($data->idproveedor0->nombre); ?>
	<?php echo $separador; ?>

	<b><?php echo CHtml::encode($data->getAttributeLabel('moneda_idmoneda')); ?>:</b>
	<?php echo CHtml::encode($data->monedaIdmoneda->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechacreacion')); ?>:</b>
	<?php echo CHtml::encode($data->fechacreacion); ?>
	<?php echo $separador; ?>

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechacierre')); ?>:</b>
	<?php echo CHtml::encode($data->fechacierre); ?>
	<?php echo $separador; ?>
        
        <b><?php echo CHtml::encode($data->getAttributeLabel('fechaaprobacion')); ?>:</b>
	<?php echo CHtml::encode($data->fechaaprobacion); ?>
	<?php echo $separador; ?>

        <b>
        <?php
            if($data->estado=='activo'){
                echo CHtml::link("Agregar nuevo item",Yii::app()->createUrl($this->module->id."/pedidosproveedoresitems/create", array("pedidosproveedores_idpedidosproveedores"=>$data->idpedidosproveedores)));
            }
             
        ?>
        </b>
	<br />
        
        
         <?php
            $Provider = new CActiveDataProvider('ViewPedidosproveedoresitemsagrupado', array('criteria'=>array('condition'=>'pedidosproveedores_idpedidosproveedores='.$data->idpedidosproveedores)));
            
            if($data->estado=='activo'){
                $columnas = array(
                  'nombre',
                  'solicitado',
                  'reservado',
                  array('class' => 'CLinkColumn',
                        'header'=>'Accion',
                        'label'=>'reservar',
                        'urlExpression'=>'Yii::app()->createUrl("/PedidosProveedores/pedidosproveedoresitemdetallereserva/getreservas/id/".$data->idpedidosproveedoresitems)',
                  ),
                  array('class' => 'CButtonColumn',
                        'header'=>'Opciones',
                        'template'=>'{update}{delete}',
                        'buttons'=>array(
                                            'update'=>array('url'=>'Yii::app()->createUrl("/PedidosProveedores/pedidosproveedoresitems/update", array("id"=>$data->idpedidosproveedoresitems))'),
                                            'delete'=>array('url'=>'Yii::app()->createUrl("/PedidosProveedores/pedidosproveedoresitems/delete", array("id"=>$data->idpedidosproveedoresitems))'),
                                        ),
                      ),
                  
                );
            }else{
                $columnas = array(
                  'nombre',
                  'solicitado',
                  'reservado',
                );
            }
            
            $this->widget('ext.groupgridview.GroupGridView', array(
                'id' => 'grid1',
                'dataProvider' => $Provider,
                'mergeColumns' => array('nombre'),
                 'columns' => $columnas,
              ));
        ?>
        
	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaestimada')); ?>:</b>
	<?php echo CHtml::encode($data->fechaestimada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaaprobacion')); ?>:</b>
	<?php echo CHtml::encode($data->fechaaprobacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaentrada')); ?>:</b>
	<?php echo CHtml::encode($data->fechaentrada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaliberacion')); ?>:</b>
	<?php echo CHtml::encode($data->fechaliberacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observaciones')); ?>:</b>
	<?php echo CHtml::encode($data->observaciones); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />

	*/ ?>

</div>