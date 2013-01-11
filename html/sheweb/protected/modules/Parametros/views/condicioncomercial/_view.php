<?php
/* @var $this CondicioncomercialController */
/* @var $data Condicioncomercial */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idcondicioncomercial')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idcondicioncomercial), array('view', 'id'=>$data->idcondicioncomercial)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />


</div>