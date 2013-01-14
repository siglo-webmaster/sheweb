<?php
/* @var $this PedidosproveedoresitemsController */
/* @var $data Pedidosproveedoresitems */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idpedidosproveedoresitems')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idpedidosproveedoresitems), array('view', 'id'=>$data->idpedidosproveedoresitems)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pedidosproveedores_idpedidosproveedores')); ?>:</b>
	<?php echo CHtml::encode($data->pedidosproveedores_idpedidosproveedores); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('item_iditem')); ?>:</b>
	<?php echo CHtml::encode($data->item_iditem); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('solicitado')); ?>:</b>
	<?php echo CHtml::encode($data->solicitado); ?>
	<br />
        
        <b><?php echo CHtml::encode($data->getAttributeLabel('confirmado')); ?>:</b>
	<?php echo CHtml::encode($data->confirmado); ?>
	<br />
        
	<b><?php echo CHtml::encode($data->getAttributeLabel('recibido')); ?>:</b>
	<?php echo CHtml::encode($data->recibido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />


</div>