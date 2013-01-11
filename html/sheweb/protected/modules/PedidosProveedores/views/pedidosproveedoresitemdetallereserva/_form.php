<?php
/* @var $this PedidosproveedoresitemdetallereservaController */
/* @var $model Pedidosproveedoresitemdetallereserva */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pedidosproveedoresitemdetallereserva-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
        

		
	<?php echo $form->hiddenField($model,'pedidosproveedoresitems_idpedidosproveedoresitems'); ?>



	<div class="row">
		<?php echo $form->labelEx($model,'bodega_idbodega'); ?>
                <?php
                    $select = CHtml::listData(Bodega::model()->findAll(), 'idbodega', 'nombre');
                    echo $form->dropDownList($model,'bodega_idbodega',$select);
                ?>
		<?php echo $form->error($model,'bodega_idbodega'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reservado'); ?>
		<?php echo $form->textField($model,'reservado'); ?>
		<?php echo $form->error($model,'reservado'); ?>
	</div>
        
        <div class="row">
		<?php echo "<b>Proyecto</b>" ?>
                <?php
                    $select = CHtml::listData(Proyectosespeciales::model()->findAll(" estado='activo' "), 'idproyectosespeciales', 'nombre');
                    echo $form->dropDownList($model,'proyectosespeciales_idproyectosespeciales',$select);
                ?>
		<?php echo $form->error($model,'proyectosespeciales_idproyectosespeciales'); ?>
	</div>
        
        <hr class='separador_blanco'>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->