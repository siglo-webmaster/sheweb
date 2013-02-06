<?php
/* @var $this TipoitematributosController */
/* @var $data Tipoitematributos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idtipoitematributos')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idtipoitematributos), array('view', 'id'=>$data->idtipoitematributos)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />
        
        <b><?php echo CHtml::encode($data->getAttributeLabel('tipodato')); ?>:</b>
	<?php echo CHtml::encode($data->tipodato); ?>
	<br />


</div>