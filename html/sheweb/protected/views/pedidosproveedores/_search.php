<?php
/* @var $this PedidosproveedoresController */
/* @var $model Pedidosproveedores */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idpedidosproveedores'); ?>
		<?php echo $form->textField($model,'idpedidosproveedores'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usuariocreacion'); ?>
		<?php echo $form->textField($model,'usuariocreacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usuarioaprobacion'); ?>
		<?php echo $form->textField($model,'usuarioaprobacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idproveedor'); ?>
		<?php echo $form->textField($model,'idproveedor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'moneda_idmoneda'); ?>
		<?php echo $form->textField($model,'moneda_idmoneda'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechacreacion'); ?>
		<?php echo $form->textField($model,'fechacreacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechacierre'); ?>
		<?php echo $form->textField($model,'fechacierre'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechaestimada'); ?>
		<?php echo $form->textField($model,'fechaestimada'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechaaprobacion'); ?>
		<?php echo $form->textField($model,'fechaaprobacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechaentrada'); ?>
		<?php echo $form->textField($model,'fechaentrada'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechaliberacion'); ?>
		<?php echo $form->textField($model,'fechaliberacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcion'); ?>
		<?php echo $form->textArea($model,'descripcion',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'observaciones'); ?>
		<?php echo $form->textArea($model,'observaciones',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estado'); ?>
		<?php echo $form->textField($model,'estado',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->