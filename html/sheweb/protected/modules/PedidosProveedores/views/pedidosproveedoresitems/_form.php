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
            <?php
                    $campo = true;
                    if(isset($pedidosproveedores_idpedidosproveedores)){
                        if($pedidosproveedores_idpedidosproveedores!=false){
                            echo $form->hiddenField($model,'pedidosproveedores_idpedidosproveedores',array('value'=>$pedidosproveedores_idpedidosproveedores));
                            $campo = false;
                        }
                    }
                    if($campo){
                        echo $form->labelEx($model,'pedidosproveedores_idpedidosproveedores'); 
                        echo $form->textField($model,'pedidosproveedores_idpedidosproveedores');
                        echo $form->error($model,'pedidosproveedores_idpedidosproveedores'); 
                    }
                
            ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'item_iditem'); ?>
		<?php echo $form->textField($model,'item_iditem'); ?>
		<?php echo $form->error($model,'item_iditem'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'solicitado'); ?>
		<?php echo $form->textField($model,'solicitado'); ?>
		<?php echo $form->error($model,'solicitado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'recibido'); ?>
		<?php echo $form->textField($model,'recibido'); ?>
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