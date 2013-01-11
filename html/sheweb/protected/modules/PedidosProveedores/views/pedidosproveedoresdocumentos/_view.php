<?php
/* @var $this PedidosproveedoresdocumentosController */
/* @var $data Pedidosproveedoresdocumentos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idpedidosproveedoresdocumentos')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idpedidosproveedoresdocumentos), array('view', 'id'=>$data->idpedidosproveedoresdocumentos)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pedidosproveedores_idpedidosproveedores')); ?>:</b>
	<?php echo CHtml::encode($data->pedidosproveedores_idpedidosproveedores); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tiposdocumentosanexos_idtiposdocumentosanexos')); ?>:</b>
	<?php echo CHtml::encode($data->tiposdocumentosanexos_idtiposdocumentosanexos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('url')); ?>:</b>
	<?php echo CHtml::encode($data->url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />


</div>