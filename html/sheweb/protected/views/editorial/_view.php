<?php
/* @var $this EditorialController */
/* @var $data Editorial */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ideditorial')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ideditorial), array('view', 'id'=>$data->ideditorial)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />


</div>