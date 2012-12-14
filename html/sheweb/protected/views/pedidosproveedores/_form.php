<?php
/* @var $this PedidosproveedoresController */
/* @var $model Pedidosproveedores */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pedidosproveedores-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'usuariocreacion'); ?>
		<?php echo $form->textField($model,'usuariocreacion'); ?>
		<?php echo $form->error($model,'usuariocreacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usuarioaprobacion'); ?>
		<?php echo $form->textField($model,'usuarioaprobacion'); ?>
		<?php echo $form->error($model,'usuarioaprobacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idproveedor'); ?>
		<?php echo $form->textField($model,'idproveedor'); ?>
		<?php echo $form->error($model,'idproveedor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'moneda_idmoneda'); ?>
		<?php echo $form->textField($model,'moneda_idmoneda'); ?>
		<?php echo $form->error($model,'moneda_idmoneda'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechacreacion'); ?>
		<?php echo $form->textField($model,'fechacreacion'); ?>
		<?php echo $form->error($model,'fechacreacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechacierre'); ?>
		<?php echo $form->textField($model,'fechacierre'); ?>
		<?php echo $form->error($model,'fechacierre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaestimada'); ?>
		<?php echo $form->textField($model,'fechaestimada'); ?>
		<?php echo $form->error($model,'fechaestimada'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaaprobacion'); ?>
		<?php echo $form->textField($model,'fechaaprobacion'); ?>
		<?php echo $form->error($model,'fechaaprobacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaentrada'); ?>
		<?php echo $form->textField($model,'fechaentrada'); ?>
		<?php echo $form->error($model,'fechaentrada'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaliberacion'); ?>
		<?php echo $form->textField($model,'fechaliberacion'); ?>
		<?php echo $form->error($model,'fechaliberacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textArea($model,'descripcion',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'observaciones'); ?>
		<?php echo $form->textArea($model,'observaciones',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'observaciones'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->textField($model,'estado',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'estado'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->