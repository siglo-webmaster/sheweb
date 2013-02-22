<?php
/* @var $this EstrellasController */
/* @var $data Estrellas */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idestrellas')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idestrellas), array('view', 'id'=>$data->idestrellas)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />


</div>