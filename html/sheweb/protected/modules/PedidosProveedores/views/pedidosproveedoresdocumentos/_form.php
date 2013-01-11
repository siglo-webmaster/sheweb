<?php
/* @var $this PedidosproveedoresdocumentosController */
/* @var $model Pedidosproveedoresdocumentos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pedidosproveedoresdocumentos-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		
		<?php echo $form->hiddenField($model,'pedidosproveedores_idpedidosproveedores',array('value'=>$idpedidosproveedores)); ?>
		<?php echo $form->error($model,'pedidosproveedores_idpedidosproveedores'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tiposdocumentosanexos_idtiposdocumentosanexos'); ?>
		<?php echo $form->textField($model,'tiposdocumentosanexos_idtiposdocumentosanexos'); ?>
		<?php echo $form->error($model,'tiposdocumentosanexos_idtiposdocumentosanexos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'url'); ?>
		<?php echo $form->textArea($model,'url',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'url'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->