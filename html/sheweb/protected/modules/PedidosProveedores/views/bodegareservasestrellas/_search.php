<?php
/* @var $this BodegareservasestrellasController */
/* @var $model Bodegareservasestrellas */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idbodegareservasestrellas'); ?>
		<?php echo $form->textField($model,'idbodegareservasestrellas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bodega_idbodega'); ?>
		<?php echo $form->textField($model,'bodega_idbodega'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idreservasestrellascategoriaeditorial'); ?>
		<?php echo $form->textField($model,'idreservasestrellascategoriaeditorial',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cantidad'); ?>
		<?php echo $form->textField($model,'cantidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'prioridad'); ?>
		<?php echo $form->textField($model,'prioridad'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->