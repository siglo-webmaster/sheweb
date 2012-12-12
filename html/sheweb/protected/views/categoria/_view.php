<?php
/* @var $this CategoriaController */
/* @var $data Categoria */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idcategoria')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idcategoria), array('view', 'id'=>$data->idcategoria)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idcategoriapadre')); ?>:</b>
	<?php echo CHtml::encode($data->idcategoriapadre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('raiz')); ?>:</b>
	<?php echo CHtml::encode($data->raiz); ?>
	<br />


</div>