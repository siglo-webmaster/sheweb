<?php
/* @var $this TipovendedorController */
/* @var $data Tipovendedor */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idtipovendedor')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idtipovendedor), array('view', 'id'=>$data->idtipovendedor)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />


</div>