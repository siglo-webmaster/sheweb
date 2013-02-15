<?php
/* @var $this CargasexcelController */
/* @var $model Cargasexcel */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cargasexcel-form',
	'enableAjaxValidation'=>false,
        'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	
	<?php echo $form->errorSummary($model); ?>

	
	<div class="row">
		<?php echo $form->labelEx($model,'file'); ?>
		              
                <?php $this->widget('CMultiFileUpload',array(
                    'name'=>'file',
                    'accept'=>'xls',
                    'max'=>1,
                    'remove'=>Yii::t('ui','Borrar'),
                    'denied'=>'tipo de archivo no permitido. Solo son permitidos con extensión xls', //message that is displayed when a file type is not allowed
                    'duplicate'=>'nombre de archivo duplicado', //message that is displayed when a file appears twice
                    'htmlOptions'=>array('size'=>25),
                    )); 
                ?>

	</div>
        <?php 
            echo $form->hiddenField($model,'pedidosproveedores_idpedidosproveedores',array('value'=>$pedidosproveedores_idpedidosproveedores));
        ?>
        <hr class="separador_blanco">
        
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->