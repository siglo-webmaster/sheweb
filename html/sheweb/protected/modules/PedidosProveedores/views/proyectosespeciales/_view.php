<?php
/* @var $this ProyectosespecialesController */
/* @var $data Proyectosespeciales */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idproyectosespeciales')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idproyectosespeciales), array('view', 'id'=>$data->idproyectosespeciales)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idcliente')); ?>:</b>
	<?php echo CHtml::encode($data->idcliente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idusuariocreacion')); ?>:</b>
	<?php echo CHtml::encode($data->idusuariocreacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechainicio')); ?>:</b>
	<?php echo CHtml::encode($data->fechainicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechacierre')); ?>:</b>
	<?php echo CHtml::encode($data->fechacierre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observaciones')); ?>:</b>
	<?php echo CHtml::encode($data->observaciones); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />

	*/ ?>

</div>