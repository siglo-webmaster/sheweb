<?php
/* @var $this TempEntradasalmacenController */
/* @var $data TempEntradasalmacen */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idtemp_entradasalmacen')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idtemp_entradasalmacen), array('view', 'id'=>$data->idtemp_entradasalmacen)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('documentoproveedor')); ?>:</b>
	<?php echo CHtml::encode($data->documentoproveedor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observaciones')); ?>:</b>
	<?php echo CHtml::encode($data->observaciones); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bodega_idbodega')); ?>:</b>
	<?php echo CHtml::encode($data->bodega_idbodega); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pedidosproveedores_idpedidosproveedores')); ?>:</b>
	<?php echo CHtml::encode($data->pedidosproveedores_idpedidosproveedores); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usergroups_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->usergroups_user_id); ?>
	<br />


</div>