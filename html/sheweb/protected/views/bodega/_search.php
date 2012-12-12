<?php
/* @var $this BodegaController */
/* @var $model Bodega */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idbodega'); ?>
		<?php echo $form->textField($model,'idbodega'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>256)); ?>
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