<?php
/* @var $this ReservasestrellascategoriaeditorialController */
/* @var $model Reservasestrellascategoriaeditorial */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'reservasestrellascategoriaeditorial-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'estrellascategoriaeditorial_idestrellascategoriaeditorial'); ?>
		<?php echo $form->textField($model,'estrellascategoriaeditorial_idestrellascategoriaeditorial',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'estrellascategoriaeditorial_idestrellascategoriaeditorial'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ciudad_idciudad'); ?>
		<?php echo $form->textField($model,'ciudad_idciudad'); ?>
		<?php echo $form->error($model,'ciudad_idciudad'); ?>
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