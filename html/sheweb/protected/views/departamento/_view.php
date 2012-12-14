<?php
/* @var $this DepartamentoController */
/* @var $data Departamento */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('iddepartamento')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->iddepartamento), array('view', 'id'=>$data->iddepartamento)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pais_idpais')); ?>:</b>
	<?php 
            echo CHtml::encode($data->paisIdpais->nombre. " (".$data->pais_idpais.")"); 
        ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />


</div>