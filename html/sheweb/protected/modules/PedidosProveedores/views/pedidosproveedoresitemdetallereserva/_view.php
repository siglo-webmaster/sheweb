<?php
/* @var $this PedidosproveedoresitemdetallereservaController */
/* @var $data Pedidosproveedoresitemdetallereserva */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idpedidosproveedoresitemdetallereserva')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idpedidosproveedoresitemdetallereserva), array('view', 'id'=>$data->idpedidosproveedoresitemdetallereserva)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pedidosproveedoresitems_idpedidosproveedoresitems')); ?>:</b>
	<?php echo CHtml::encode($data->pedidosproveedoresitems_idpedidosproveedoresitems); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuarios_idusuarios')); ?>:</b>
	<?php echo CHtml::encode($data->usuarios_idusuarios); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bodega_idbodega')); ?>:</b>
	<?php echo CHtml::encode($data->bodega_idbodega); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reservado')); ?>:</b>
	<?php echo CHtml::encode($data->reservado); ?>
	<br />


</div>