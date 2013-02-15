<?php
/* @var $this TempEntradasalmacenController */
/* @var $model TempEntradasalmacen */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'temp-entradasalmacen-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

        <div class="row">
		<?php echo $form->labelEx($model,'bodega_idbodega'); ?>
		<?php
		$select = CHtml::listData(Bodega::model()->findAll(), 'idbodega', 'nombre');
                    echo $form->dropDownList($model,'bodega_idbodega',$select);
                ?>
		<?php echo $form->error($model,'bodega_idbodega'); ?>
	</div>
        
	<div class="row">
		<?php echo $form->labelEx($model,'documentoproveedor'); ?>
		<?php echo $form->textField($model,'documentoproveedor',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'documentoproveedor'); ?>
	</div>

	 <div class="row">
		<?php echo $form->labelEx($model,'observaciones'); ?>
		<?php echo $form->textArea($model,'observaciones',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'observaciones'); ?>
	</div>

        <hr class="separador_blanco">

	<div class="row">
		<?php echo $form->hiddenField($model,'pedidosproveedores_idpedidosproveedores',array('value'=>$idpedidosproveedores)); ?>
		<?php echo $form->error($model,'pedidosproveedores_idpedidosproveedores'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->