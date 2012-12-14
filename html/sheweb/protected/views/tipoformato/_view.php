<?php
/* @var $this TipoformatoController */
/* @var $data Tipoformato */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idtipoformato')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idtipoformato), array('view', 'id'=>$data->idtipoformato)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />


</div>