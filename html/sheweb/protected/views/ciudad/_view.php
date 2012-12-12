<?php
/* @var $this CiudadController */
/* @var $data Ciudad */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idciudad')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idciudad), array('view', 'id'=>$data->idciudad)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('departamento_iddepartamento')); ?>:</b>
	<?php echo CHtml::encode($data->departamento_iddepartamento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />


</div>