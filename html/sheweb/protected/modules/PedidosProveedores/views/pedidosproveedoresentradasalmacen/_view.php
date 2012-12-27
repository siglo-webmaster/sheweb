<?php
/* @var $this PedidosproveedoresentradasalmacenController */
/* @var $data Pedidosproveedoresentradasalmacen */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idpedidosproveedoresentradasalmacen')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idpedidosproveedoresentradasalmacen), array('view', 'id'=>$data->idpedidosproveedoresentradasalmacen)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observaciones')); ?>:</b>
	<?php echo CHtml::encode($data->observaciones); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bodega_idbodega')); ?>:</b>
	<?php echo CHtml::encode($data->bodega_idbodega); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuarios_idusuarios')); ?>:</b>
	<?php echo CHtml::encode($data->usuarios_idusuarios); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pedidosproveedores_idpedidosproveedores')); ?>:</b>
	<?php echo CHtml::encode($data->pedidosproveedores_idpedidosproveedores); ?>
	<br />


</div>