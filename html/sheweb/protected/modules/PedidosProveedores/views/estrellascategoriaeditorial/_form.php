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
		<?php echo $form->dropDownList($model,'estrellas_idestrellas',CHtml::listData(Estrellas::model()->findAll(), 'idestrellas', 'nombre'));  ?>
		<?php echo $form->error($model,'estrellas_idestrellas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'categoria_idcategoria'); ?>
		<?php echo $form->dropDownList($model,'categoria_idcategoria',CHtml::listData(Categoria::model()->findAll(), 'idcategoria', 'nombre'));  ?>
		<?php echo $form->error($model,'categoria_idcategoria'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'editorial_ideditorial'); ?>
		<?php echo $form->dropDownList($model,'editorial_ideditorial',CHtml::listData(Editorial::model()->findAll(), 'ideditorial', 'nombre'));  ?>
		<?php echo $form->error($model,'editorial_ideditorial'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'condicioncomercial_idcondicioncomercial'); ?>
		<?php echo $form->dropDownList($model,'condicioncomercial_idcondicioncomercial',CHtml::listData(Condicioncomercial::model()->findAll(), 'idcondicioncomercial', 'nombre'));  ?>
		<?php echo $form->error($model,'condicioncomercial_idcondicioncomercial'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cantidad'); ?>
		<?php echo $form->textField($model,'cantidad',array('size'=>12,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'cantidad'); ?>
	</div>

        <hr class="separador_blanco">
        
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->