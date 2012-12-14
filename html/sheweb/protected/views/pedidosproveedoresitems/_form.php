<?php
/* @var $this PedidosproveedoresitemsController */
/* @var $model Pedidosproveedoresitems */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pedidosproveedoresitems-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'pedidosproveedores_idpedidosproveedores'); ?>
                <?php 
                    $select = CHtml::listData(Pedidosproveedores::model()->findAll(), 'idpedidosproveedores', 'idpedidosproveedores');
                    echo $form->dropDownList($model,'pedidosproveedores_idpedidosproveedores',$select);
                ?>
		<?php echo $form->error($model,'pedidosproveedores_idpedidosproveedores'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'item_iditem'); ?>
		<?php 
                    $select = CHtml::listData(Item::model()->findAll(), 'iditem', 'nombre');
                    echo $form->dropDownList($model,'item_iditem',$select);
                ?>
		<?php echo $form->error($model,'item_iditem'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'solicitado'); ?>
		<?php echo $form->textField($model,'solicitado'); ?>
		<?php echo $form->error($model,'solicitado'); ?>
	</div>

	<div class="row">
		<?php echo $form->hiddenField($model,'recibido',array('value'=>0)); ?>
		<?php echo $form->error($model,'recibido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->textField($model,'estado',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'estado'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->