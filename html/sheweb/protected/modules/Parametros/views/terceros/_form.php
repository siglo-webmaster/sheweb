<?php
/* @var $this TercerosController */
/* @var $model Terceros */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'terceros-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

        <did class="row">
            <?php
                 echo "Tipo de Tercero: ";  
                $data= CHtml::listData(Tiposterceros::model()->findAll(), 'idtiposterceros', 'nombre');
                $this->widget('ext.EchMultiSelect.EchMultiSelect', array(
                        'name' => 'terceros_has_tiposterceros[]',    
                        'data' => $data,
                        'value'=>$terceros_has_tiposterceros,
                        'dropDownHtmlOptions'=> array(
                            'style'=>'width:100px;',
                        ),
                    ));
            ?>
        </did>
        <hr class="separador_blanco">
	<div class="row">
		<?php echo $form->labelEx($model,'tiposidentificacion_idtiposidentificacion'); ?>
		<?php 
                
                    $select = CHtml::listData(Tiposidentificacion::model()->findAll(), 'idtiposidentificacion', 'nombre');
                    echo $form->dropDownList($model,'tiposidentificacion_idtiposidentificacion',$select);
                ?>
		<?php echo $form->error($model,'tiposidentificacion_idtiposidentificacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ciudad_idciudad'); ?>
		<?php 
                
                    $select = CHtml::listData(Ciudad::model()->findAll(), 'idciudad', 'nombre');
                    echo $form->dropDownList($model,'ciudad_idciudad',$select);
                ?>
		<?php echo $form->error($model,'ciudad_idciudad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'identificacion'); ?>
		<?php echo $form->textField($model,'identificacion',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'identificacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contacto'); ?>
		<?php echo $form->textField($model,'contacto',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'contacto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefonocontacto'); ?>
		<?php echo $form->textField($model,'telefonocontacto',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'telefonocontacto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'direccion'); ?>
	</div>
        
        

	<div class="row">
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->dropDownList($model,'estado',array('activo'=>'activo','inactivo'=>'inactivo')); ?>
		<?php echo $form->error($model,'estado'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->