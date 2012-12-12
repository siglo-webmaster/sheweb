<?php
/* @var $this TiposidentificacionController */
/* @var $data Tiposidentificacion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idtiposidentificacion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idtiposidentificacion), array('view', 'id'=>$data->idtiposidentificacion)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />


</div>