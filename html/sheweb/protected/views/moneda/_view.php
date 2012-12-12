<?php
/* @var $this MonedaController */
/* @var $data Moneda */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idmoneda')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idmoneda), array('view', 'id'=>$data->idmoneda)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />


</div>