<?php
/* @var $this PedidosproveedoresController */
/* @var $data Pedidosproveedores */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idpedidosproveedores')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idpedidosproveedores), array('view', 'id'=>$data->idpedidosproveedores)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuariocreacion')); ?>:</b>
	<?php echo CHtml::encode($data->usuariocreacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuarioaprobacion')); ?>:</b>
	<?php echo CHtml::encode($data->usuarioaprobacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idproveedor')); ?>:</b>
	<?php echo CHtml::encode($data->idproveedor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('moneda_idmoneda')); ?>:</b>
	<?php echo CHtml::encode($data->moneda_idmoneda); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechacreacion')); ?>:</b>
	<?php echo CHtml::encode($data->fechacreacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechacierre')); ?>:</b>
	<?php echo CHtml::encode($data->fechacierre); ?>
	<br />

        <b><?php  echo CHtml::link('additems', array('additems', 'id'=>$data->idpedidosproveedores));  ?></b>
	<br />
        
	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaestimada')); ?>:</b>
	<?php echo CHtml::encode($data->fechaestimada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaaprobacion')); ?>:</b>
	<?php echo CHtml::encode($data->fechaaprobacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaentrada')); ?>:</b>
	<?php echo CHtml::encode($data->fechaentrada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaliberacion')); ?>:</b>
	<?php echo CHtml::encode($data->fechaliberacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observaciones')); ?>:</b>
	<?php echo CHtml::encode($data->observaciones); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />

	*/ ?>

</div>