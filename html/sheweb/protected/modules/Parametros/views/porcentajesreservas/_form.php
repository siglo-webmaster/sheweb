<?php
/* @var $this PorcentajesreservasController */
/* @var $model Porcentajesreservas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'porcentajesreservas-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'usergroups_user_id'); ?>
                <?php 
                
                    $select = CHtml::listData(UsergroupsUser::model()->findAll(), 'id', 'username');
                    echo $form->dropDownList($model,'usergroups_user_id',$select);
                ?>
            
		<?php echo $form->error($model,'usergroups_user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'categoria_idcategoria'); ?>
		<?php 
                
                    $select = CHtml::listData(Categoria::model()->findAll(), 'idcategoria', 'nombre');
                    echo $form->dropDownList($model,'categoria_idcategoria',$select);
                ?>
		<?php echo $form->error($model,'categoria_idcategoria'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'editorial_ideditorial'); ?>
		<?php 
                
                    $select = CHtml::listData(Editorial::model()->findAll(), 'ideditorial', 'nombre');
                    echo $form->dropDownList($model,'editorial_ideditorial',$select);
                ?>
		<?php echo $form->error($model,'editorial_ideditorial'); ?>
	</div>

          <hr class="separador_blanco">
        
        <div class="row">
		<?php echo $form->labelEx($model,'bodega_idbodega'); ?>
		<?php 
                
                    $select = CHtml::listData(Bodega::model()->findAll(), 'idbodega', 'nombre');
                    echo $form->dropDownList($model,'bodega_idbodega',$select);
                ?>
		<?php echo $form->error($model,'bodega_idbodega'); ?>
	</div>
        
	<div class="row">
		<?php echo $form->labelEx($model,'porcentaje'); ?>
		<?php echo $form->textField($model,'porcentaje',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'porcentaje'); ?>
	</div>
        
        <hr class="separador_blanco">
        
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->