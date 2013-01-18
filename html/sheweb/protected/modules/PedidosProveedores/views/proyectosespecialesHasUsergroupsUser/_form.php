<?php
/* @var $this ProyectosespecialesHasUsergroupsUserController */
/* @var $model ProyectosespecialesHasUsergroupsUser */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'proyectosespeciales-has-usergroups-user-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'proyectosespeciales_idproyectosespeciales'); ?>
		<?php 
                    $select = CHtml::listData(Proyectosespeciales::model()->findAll(), 'idproyectosespeciales', 'nombre');
                    echo $form->dropDownList($model,'proyectosespeciales_idproyectosespeciales',$select);
                ?>
		<?php echo $form->error($model,'proyectosespeciales_idproyectosespeciales'); ?>
	</div>

       
        <div class="row">
         <?php echo $form->labelEx($model,'usergroups_user_id'); ?>
         <?php
                $data= CHtml::listData(UsergroupsUser::model()->findAll(), 'id', 'username');
                $this->widget('ext.EchMultiSelect.EchMultiSelect', array(
                        'name' => 'usergroups_user[]',    
                        'data' => $data,
                        'value'=>array(),
                        'dropDownHtmlOptions'=> array(
                            'style'=>'width:100px;',
                        ),
                    ));
        ?>
        </div>

        <hr class="separador_blanco">
        
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->