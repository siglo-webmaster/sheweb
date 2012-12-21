<?php
/* @var $this CategoriaController */
/* @var $model Categoria */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'categoria-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idcategoriapadre'); ?>
		<?php 
                
                    $select = CHtml::listData(Categoria::model()->findAll(), 'idcategoria', 'nombre');
                    echo $form->dropDownList($model,'idcategoriapadre',$select,array('empty'=>''));
                ?>
		<?php echo $form->error($model,'idcategoriapadre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>
        
        <hr class="separador_blanco">
        
	<div class="row">
		<?php echo $form->labelEx($model,'raiz'); ?>
		<?php echo $form->dropDownList($model,'raiz',array('1'=>'si','0'=>'no')); ?>
		<?php echo $form->error($model,'raiz'); ?>
	</div>

        <hr class="separador_blanco">
        
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->