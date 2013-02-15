<?php
/* @var $this ReservasestrellascategoriaeditorialController */
/* @var $data Reservasestrellascategoriaeditorial */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idreservasestrellascategoriaeditorial')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idreservasestrellascategoriaeditorial), array('view', 'id'=>$data->idreservasestrellascategoriaeditorial)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estrellascategoriaeditorial_idestrellascategoriaeditorial')); ?>:</b>
	<?php echo CHtml::encode($data->estrellascategoriaeditorial_idestrellascategoriaeditorial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usergroups_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->usergroups_user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bodega_idbodega')); ?>:</b>
	<?php echo CHtml::encode($data->bodega_idbodega); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cantidad')); ?>:</b>
	<?php echo CHtml::encode($data->cantidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prioridad')); ?>:</b>
	<?php echo CHtml::encode($data->prioridad); ?>
	<br />


</div>