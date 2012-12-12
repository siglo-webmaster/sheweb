<?php
/* @var $this TipostercerosController */
/* @var $data Tiposterceros */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idtiposterceros')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idtiposterceros), array('view', 'id'=>$data->idtiposterceros)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />


</div>