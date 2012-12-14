<?php
/* @var $this PedidosprovedoresdocumentosController */
/* @var $data Pedidosprovedoresdocumentos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idpedidosprovedoresdocumentos')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idpedidosprovedoresdocumentos), array('view', 'id'=>$data->idpedidosprovedoresdocumentos)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pedidosproveedores_idpedidosproveedores')); ?>:</b>
	<?php echo CHtml::encode($data->pedidosproveedores_idpedidosproveedores); ?>
	<br />


	<b><?php echo CHtml::encode($data->getAttributeLabel('url')); ?>:</b>
	<?php echo CHtml::encode($data->url); ?>
	<br />


</div>