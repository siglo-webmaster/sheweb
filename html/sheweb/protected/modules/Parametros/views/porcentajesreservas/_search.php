<?php
/* @var $this PorcentajesreservasController */
/* @var $model Porcentajesreservas */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idporcentajesreservas'); ?>
		<?php echo $form->textField($model,'idporcentajesreservas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usergroups_user_id'); ?>
		<?php echo $form->textField($model,'usergroups_user_id',array('size'=>20,'maxlength'=>20)); ?>
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
		<?php echo $form->label($model,'porcentaje'); ?>
		<?php echo $form->textField($model,'porcentaje',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->