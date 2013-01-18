<?php
/* @var $this ProyectosespecialesHasUsergroupsUserController */
/* @var $model ProyectosespecialesHasUsergroupsUser */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idproyectosespeciales_has_usergroups_user'); ?>
		<?php echo $form->textField($model,'idproyectosespeciales_has_usergroups_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'proyectosespeciales_idproyectosespeciales'); ?>
		<?php echo $form->textField($model,'proyectosespeciales_idproyectosespeciales'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usergroups_user_id'); ?>
		<?php echo $form->textField($model,'usergroups_user_id',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->