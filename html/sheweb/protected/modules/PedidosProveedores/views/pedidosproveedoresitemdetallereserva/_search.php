<?php
/* @var $this PedidosproveedoresitemdetallereservaController */
/* @var $model Pedidosproveedoresitemdetallereserva */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idpedidosproveedoresitemdetallereserva'); ?>
		<?php echo $form->textField($model,'idpedidosproveedoresitemdetallereserva'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pedidosproveedoresitems_idpedidosproveedoresitems'); ?>
		<?php echo $form->textField($model,'pedidosproveedoresitems_idpedidosproveedoresitems'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usuarios_idusuarios'); ?>
		<?php echo $form->textField($model,'usuarios_idusuarios'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bodega_idbodega'); ?>
		<?php echo $form->textField($model,'bodega_idbodega'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reservado'); ?>
		<?php echo $form->textField($model,'reservado'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->