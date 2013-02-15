<?php
/* @var $this TipoitematributosController */
/* @var $model Tipoitematributos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tipoitematributos-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($model,'tipodato'); ?>
		<?php echo $form->dropDownList($model,'tipodato',array('file'=>'archivo','image'=>'imagen','text'=>'texto')); ?>
		<?php echo $form->error($model,'tipodato'); ?>
	</div>
        
        <hr class="separador_blanco">
        
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->