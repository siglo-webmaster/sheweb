<?php
/* @var $this PedidosprovedoresdocumentosController */
/* @var $model Pedidosprovedoresdocumentos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idpedidosprovedoresdocumentos'); ?>
		<?php echo $form->textField($model,'idpedidosprovedoresdocumentos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pedidosproveedores_idpedidosproveedores'); ?>
		<?php echo $form->textField($model,'pedidosproveedores_idpedidosproveedores'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'url'); ?>
		<?php echo $form->textArea($model,'url',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->