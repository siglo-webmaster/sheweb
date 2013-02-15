<?php
/* @var $this TempEntradasalmacendetalleController */
/* @var $data TempEntradasalmacendetalle */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idtemp_entradasalmacendetalle')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idtemp_entradasalmacendetalle), array('view', 'id'=>$data->idtemp_entradasalmacendetalle)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pedidosproveedoresitems_idpedidosproveedoresitems')); ?>:</b>
	<?php echo CHtml::encode($data->pedidosproveedoresitems_idpedidosproveedoresitems); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('temp_entradasalmacen_idtemp_entradasalmacen')); ?>:</b>
	<?php echo CHtml::encode($data->temp_entradasalmacen_idtemp_entradasalmacen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('recibido')); ?>:</b>
	<?php echo CHtml::encode($data->recibido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fallado')); ?>:</b>
	<?php echo CHtml::encode($data->fallado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observacionesfallado')); ?>:</b>
	<?php echo CHtml::encode($data->observacionesfallado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('finalizar')); ?>:</b>
	<?php echo CHtml::encode($data->finalizar); ?>
	<br />


</div>