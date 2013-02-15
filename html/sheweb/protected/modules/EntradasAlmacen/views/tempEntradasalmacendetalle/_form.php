<?php
/* @var $this TempEntradasalmacendetalleController */
/* @var $model TempEntradasalmacendetalle */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'temp-entradasalmacendetalle-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'pedidosproveedoresitems_idpedidosproveedoresitems'); ?>
		<?php echo $form->textField($model,'pedidosproveedoresitems_idpedidosproveedoresitems'); ?>
		<?php echo $form->error($model,'pedidosproveedoresitems_idpedidosproveedoresitems'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'temp_entradasalmacen_idtemp_entradasalmacen'); ?>
		<?php echo $form->textField($model,'temp_entradasalmacen_idtemp_entradasalmacen'); ?>
		<?php echo $form->error($model,'temp_entradasalmacen_idtemp_entradasalmacen'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'recibido'); ?>
		<?php echo $form->textField($model,'recibido'); ?>
		<?php echo $form->error($model,'recibido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fallado'); ?>
		<?php echo $form->textField($model,'fallado'); ?>
		<?php echo $form->error($model,'fallado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'observacionesfallado'); ?>
		<?php echo $form->textArea($model,'observacionesfallado',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'observacionesfallado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'finalizar'); ?>
		<?php echo $form->textField($model,'finalizar'); ?>
		<?php echo $form->error($model,'finalizar'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->