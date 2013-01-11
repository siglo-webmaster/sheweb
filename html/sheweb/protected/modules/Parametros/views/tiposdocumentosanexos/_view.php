<?php
/* @var $this TiposdocumentosanexosController */
/* @var $data Tiposdocumentosanexos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idtiposdocumentosanexos')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idtiposdocumentosanexos), array('view', 'id'=>$data->idtiposdocumentosanexos)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />


</div>