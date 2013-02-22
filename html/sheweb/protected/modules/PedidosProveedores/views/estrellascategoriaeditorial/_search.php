<?php
/* @var $this EstrellascategoriaeditorialController */
/* @var $model Estrellascategoriaeditorial */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idestrellascategoriaeditorial'); ?>
		<?php echo $form->textField($model,'idestrellascategoriaeditorial',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estrellas_idestrellas'); ?>
		<?php echo $form->textField($model,'estrellas_idestrellas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'categoria_idcategoria'); ?>
		<?php echo $form->textField($model,'categoria_idcategoria'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'editorial_ideditorial'); ?>
		<?php echo $form->textField($model,'editorial_ideditorial'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'condicioncomercial_idcondicioncomercial'); ?>
		<?php echo $form->textField($model,'condicioncomercial_idcondicioncomercial'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cantidad'); ?>
		<?php echo $form->textField($model,'cantidad',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->