<?php
/* @var $this EstrellascategoriaeditorialController */
/* @var $model Estrellascategoriaeditorial */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'estrellascategoriaeditorial-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'estrellas_idestrellas'); ?>
		<?php echo $form->textField($model,'estrellas_idestrellas'); ?>
		<?php echo $form->error($model,'estrellas_idestrellas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'categoria_idcategoria'); ?>
		<?php echo $form->textField($model,'categoria_idcategoria'); ?>
		<?php echo $form->error($model,'categoria_idcategoria'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'editorial_ideditorial'); ?>
		<?php echo $form->textField($model,'editorial_ideditorial'); ?>
		<?php echo $form->error($model,'editorial_ideditorial'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'condicioncomercial_idcondicioncomercial'); ?>
		<?php echo $form->textField($model,'condicioncomercial_idcondicioncomercial'); ?>
		<?php echo $form->error($model,'condicioncomercial_idcondicioncomercial'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cantidad'); ?>
		<?php echo $form->textField($model,'cantidad',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'cantidad'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->