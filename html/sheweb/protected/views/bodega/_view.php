<?php
/* @var $this BodegaController */
/* @var $data Bodega */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idbodega')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idbodega), array('view', 'id'=>$data->idbodega)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />


</div>