<?php
/* @var $this BodegareservasestrellasController */
/* @var $data Bodegareservasestrellas */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idbodegareservasestrellas')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idbodegareservasestrellas), array('view', 'id'=>$data->idbodegareservasestrellas)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bodega_idbodega')); ?>:</b>
	<?php echo CHtml::encode($data->bodega_idbodega); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idreservasestrellascategoriaeditorial')); ?>:</b>
	<?php echo CHtml::encode($data->idreservasestrellascategoriaeditorial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cantidad')); ?>:</b>
	<?php echo CHtml::encode($data->cantidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prioridad')); ?>:</b>
	<?php echo CHtml::encode($data->prioridad); ?>
	<br />


</div>