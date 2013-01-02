<?php
/* @var $this AutorController */
/* @var $data Autor */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idautor')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idautor), array('view', 'id'=>$data->idautor)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apellido')); ?>:</b>
	<?php echo CHtml::encode($data->apellido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />


</div>