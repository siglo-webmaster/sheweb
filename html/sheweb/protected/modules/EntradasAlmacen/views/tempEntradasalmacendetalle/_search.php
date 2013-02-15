<?php
/* @var $this TempEntradasalmacendetalleController */
/* @var $model TempEntradasalmacendetalle */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idtemp_entradasalmacendetalle'); ?>
		<?php echo $form->textField($model,'idtemp_entradasalmacendetalle',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pedidosproveedoresitems_idpedidosproveedoresitems'); ?>
		<?php echo $form->textField($model,'pedidosproveedoresitems_idpedidosproveedoresitems'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'temp_entradasalmacen_idtemp_entradasalmacen'); ?>
		<?php echo $form->textField($model,'temp_entradasalmacen_idtemp_entradasalmacen'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'recibido'); ?>
		<?php echo $form->textField($model,'recibido'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fallado'); ?>
		<?php echo $form->textField($model,'fallado'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'observacionesfallado'); ?>
		<?php echo $form->textArea($model,'observacionesfallado',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'finalizar'); ?>
		<?php echo $form->textField($model,'finalizar'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->