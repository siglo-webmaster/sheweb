<?php
/* @var $this PedidosproveedoresdocumentosController */
/* @var $model Pedidosproveedoresdocumentos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idpedidosproveedoresdocumentos'); ?>
		<?php echo $form->textField($model,'idpedidosproveedoresdocumentos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pedidosproveedores_idpedidosproveedores'); ?>
		<?php echo $form->textField($model,'pedidosproveedores_idpedidosproveedores'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tiposdocumentosanexos_idtiposdocumentosanexos'); ?>
		<?php echo $form->textField($model,'tiposdocumentosanexos_idtiposdocumentosanexos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'url'); ?>
		<?php echo $form->textArea($model,'url',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->