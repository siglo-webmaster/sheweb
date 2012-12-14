<?php
/* @var $this ItemController */
/* @var $model Item */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'item-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'editorial_ideditorial'); ?>
                <?php 
                    $select = CHtml::listData(Editorial::model()->findAll(), 'ideditorial', 'nombre');
                    echo $form->dropDownList($model,'editorial_ideditorial',$select);
                ?>
		<?php echo $form->error($model,'editorial_ideditorial'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>512)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'isbn'); ?>
		<?php echo $form->textField($model,'isbn',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'isbn'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'barcode'); ?>
		<?php echo $form->textField($model,'barcode',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'barcode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaedicion'); ?>
		
                <?php
                    if ($model->fechaedicion!='') {
                        $model->fechaedicion=date('d-m-Y',strtotime($model->fechaedicion));

                    }
                    $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                        'model'=>$model,
                        'attribute'=>'fechaedicion',
                        'value'=>$model->fechaedicion,
                        'language' => 'es',
                        'htmlOptions' => array('readonly'=>"readonly"),
                        'options'=>array(
                            'autoSize'=>true,
                            'defaultDate'=>$model->fechaedicion,
                            'dateFormat'=>'yy-mm-dd',
                            'buttonImage'=>Yii::app()->baseUrl.'/images/basic/calendar_icon_mini.png',
                            'buttonImageOnly'=>true,
                            'buttonText'=>'Fecha',
                            'selectOtherMonths'=>true,
                            'showAnim'=>'slide',
                            'showButtonPanel'=>true,
                            'showOn'=>'button',
                            'showOtherMonths'=>true,
                            'changeMonth' => 'true',
                            'changeYear' => 'true',),
                        ));
                ?>
            
		<?php echo $form->error($model,'fechaedicion'); ?>
	</div>


	<div class="row">
		
		<?php echo $form->hiddenField($model,'temporal',array('value'=>'1')); ?>
		<?php echo $form->error($model,'temporal'); ?>
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