<?php
/* @var $this TipostransporteController */
/* @var $data Tipostransporte */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idtipostransporte')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idtipostransporte), array('view', 'id'=>$data->idtipostransporte)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />


</div>