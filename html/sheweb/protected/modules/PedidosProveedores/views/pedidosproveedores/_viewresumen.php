<?php
/* @var $this PedidosproveedoresController */

?>
<?php
      if($data->estado=='impreso'){
          
      }

?>

<?php
    $separador="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";

?>
<div class="view" id="pedido">

        <b><h3>
        <?php
            echo CHtml::link("Pedido a proveedores #".$data->idpedidosproveedores,Yii::app()->createUrl('PedidosProveedores/pedidosproveedores/view',array('id'=>$data->idpedidosproveedores)));
        ?>
        </h3></b>
	        
        <b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
        <?php echo $separador; ?>
        
        <b><?php echo CHtml::encode($data->getAttributeLabel('tipopedidosproveedores_idtipopedidosproveedores')); ?>:</b>
	<?php echo CHtml::encode( (isset($data->tipopedidosproveedoresIdtipopedidosproveedores->nombre))?$data->tipopedidosproveedoresIdtipopedidosproveedores->nombre : 0); ?>
        <?php echo $separador; ?>
        <br>
        
        
        
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
        
        
        <br />
        
	<b><?php echo CHtml::encode($data->getAttributeLabel('idproveedor')); ?>:</b>
	<?php echo CHtml::encode($data->idproveedor0->nombre); ?>
	<?php echo $separador; ?>

	<b><?php echo CHtml::encode($data->getAttributeLabel('moneda_idmoneda')); ?>:</b>
	<?php echo CHtml::encode($data->monedaIdmoneda->nombre); ?>
	<?php echo $separador; ?>
        
        <b><?php echo "Transporte: "; ?></b>
	<?php 
                if(isset($data->tipostransporteIdtipostransporte->nombre)){
                    echo CHtml::encode($data->tipostransporteIdtipostransporte->nombre);
                }
        ?>
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

        
	<br />

</div>