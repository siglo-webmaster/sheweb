<?php
/* @var $this TipopedidosproveedoresController */
/* @var $data Tipopedidosproveedores */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idtipopedidosproveedores')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idtipopedidosproveedores), array('view', 'id'=>$data->idtipopedidosproveedores)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />


</div>