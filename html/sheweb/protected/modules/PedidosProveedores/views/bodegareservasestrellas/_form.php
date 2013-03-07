<?php
/* @var $this BodegareservasestrellasController */
/* @var $model Bodegareservasestrellas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'bodegareservasestrellas-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'bodega_idbodega'); ?>
		<?php echo $form->textField($model,'bodega_idbodega'); ?>
		<?php echo $form->error($model,'bodega_idbodega'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idreservasestrellascategoriaeditorial'); ?>
		<?php echo $form->textField($model,'idreservasestrellascategoriaeditorial',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'idreservasestrellascategoriaeditorial'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cantidad'); ?>
		<?php echo $form->textField($model,'cantidad'); ?>
		<?php echo $form->error($model,'cantidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'prioridad'); ?>
		<?php echo $form->textField($model,'prioridad'); ?>
		<?php echo $form->error($model,'prioridad'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->