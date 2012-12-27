<?php
/* @var $this PedidosproveedoresentradasalmacenController */
/* @var $model Pedidosproveedoresentradasalmacen */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idpedidosproveedoresentradasalmacen'); ?>
		<?php echo $form->textField($model,'idpedidosproveedoresentradasalmacen'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'observaciones'); ?>
		<?php echo $form->textArea($model,'observaciones',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bodega_idbodega'); ?>
		<?php echo $form->textField($model,'bodega_idbodega'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usuarios_idusuarios'); ?>
		<?php echo $form->textField($model,'usuarios_idusuarios'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pedidosproveedores_idpedidosproveedores'); ?>
		<?php echo $form->textField($model,'pedidosproveedores_idpedidosproveedores'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->