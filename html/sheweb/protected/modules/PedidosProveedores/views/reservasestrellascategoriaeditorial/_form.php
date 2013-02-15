<?php
/* @var $this ReservasestrellascategoriaeditorialController */
/* @var $model Reservasestrellascategoriaeditorial */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'reservasestrellascategoriaeditorial-form',
	'enableAjaxValidation'=>false,
)); ?>
    
    <?php
      $prioridad = array();
      for ($i=1;$i<=10;$i++){
          $prioridad[$i]=$i;
      }
    ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'estrellascategoriaeditorial_idestrellascategoriaeditorial'); ?>
		<?php echo $form->dropDownList($model,'estrellascategoriaeditorial_idestrellascategoriaeditorial',CHtml::listData(Estrellascategoriaeditorial::model()->findAll(), 'idestrellascategoriaeditorial', 'idestrellascategoriaeditorial'));  ?>
		<?php echo $form->error($model,'estrellascategoriaeditorial_idestrellascategoriaeditorial'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usergroups_user_id'); ?>
		<?php echo $form->dropDownList($model,'usergroups_user_id',CHtml::listData(UsergroupsUser::model()->findAll(), 'id', 'username'));  ?>
		<?php echo $form->error($model,'usergroups_user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bodega_idbodega'); ?>
		<?php echo $form->dropDownList($model,'bodega_idbodega',CHtml::listData(Bodega::model()->findAll(), 'idbodega', 'nombre'));  ?>
		<?php echo $form->error($model,'bodega_idbodega'); ?>
	</div>

        <hr class="separador_blanco" >
        
        <div class="row">
		<?php echo $form->labelEx($model,'prioridad'); ?>
		<?php echo $form->dropDownList($model,'prioridad',$prioridad);  ?>
		<?php echo $form->error($model,'prioridad'); ?>
	</div>
        
	<div class="row">
		<?php echo $form->labelEx($model,'cantidad'); ?>
		<?php echo $form->textField($model,'cantidad',array('size'=>5)); ?>
		<?php echo $form->error($model,'cantidad'); ?>
	</div>
        
	

        <hr class="separador_blanco" >
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->