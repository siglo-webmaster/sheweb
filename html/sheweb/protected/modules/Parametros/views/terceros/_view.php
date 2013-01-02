<?php
/* @var $this TercerosController */
/* @var $data Terceros */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idterceros')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idterceros), array('view', 'id'=>$data->idterceros)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tiposidentificacion_idtiposidentificacion')); ?>:</b>
	<?php echo CHtml::encode($data->tiposidentificacion_idtiposidentificacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ciudad_idciudad')); ?>:</b>
	<?php echo CHtml::encode($data->ciudad_idciudad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('identificacion')); ?>:</b>
	<?php echo CHtml::encode($data->identificacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono')); ?>:</b>
	<?php echo CHtml::encode($data->telefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('contacto')); ?>:</b>
	<?php echo CHtml::encode($data->contacto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefonocontacto')); ?>:</b>
	<?php echo CHtml::encode($data->telefonocontacto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
	<?php echo CHtml::encode($data->direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />

	*/ ?>

</div>