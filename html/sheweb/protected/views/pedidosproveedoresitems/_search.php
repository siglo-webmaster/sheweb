<?php
/* @var $this PedidosproveedoresitemsController */
/* @var $model Pedidosproveedoresitems */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idpedidosproveedoresitems'); ?>
		<?php echo $form->textField($model,'idpedidosproveedoresitems'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pedidosproveedores_idpedidosproveedores'); ?>
		<?php echo $form->textField($model,'pedidosproveedores_idpedidosproveedores'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'item_iditem'); ?>
		<?php echo $form->textField($model,'item_iditem'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'solicitado'); ?>
		<?php echo $form->textField($model,'solicitado'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'recibido'); ?>
		<?php echo $form->textField($model,'recibido'); ?>
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