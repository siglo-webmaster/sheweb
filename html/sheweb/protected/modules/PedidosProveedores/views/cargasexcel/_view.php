<?php
/* @var $this CargasexcelController */
/* @var $data Cargasexcel */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idcargasexcel')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idcargasexcel), array('view', 'id'=>$data->idcargasexcel)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('file')); ?>:</b>
	<?php echo CHtml::encode($data->file); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usergroups_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->usergroups_user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pedidosproveedores_idpedidosproveedores')); ?>:</b>
	<?php echo CHtml::encode($data->pedidosproveedores_idpedidosproveedores); ?>
	<br />


</div>