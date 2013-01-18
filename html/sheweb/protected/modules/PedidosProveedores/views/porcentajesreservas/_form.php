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
		<?php echo $form->labelEx($model,'bodega_idbodega'); ?>
		<?php
                    $select = CHtml::listData(Bodega::model()->findAll(), 'idbodega', 'nombre');
                    echo $form->dropDownList($model,'bodega_idbodega',$select);
                ?>
		<?php echo $form->error($model,'bodega_idbodega'); ?>
	</div>
        
        <hr class="separador_blanco">
        
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
		<?php echo $form->labelEx($model,'proyectosespeciales_idproyectosespeciales'); ?>
		<?php
                    $select = CHtml::listData(Proyectosespeciales::model()->findAll(), 'idproyectosespeciales', 'nombre');
                    echo $form->dropDownList($model,'proyectosespeciales_idproyectosespeciales',$select);
                ?>
		<?php echo $form->error($model,'proyectosespeciales_idproyectosespeciales'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'porcentaje'); ?>
		<?php 
                        $porcentajes = array();
                        for($i=0.01;$i<1;$i+=0.01){
                            $porcentajes[str_pad($i,4,'0',STR_PAD_RIGHT)]=($i * 100 )."%";
                        }
                        echo $form->dropDownList($model,'porcentaje',$porcentajes); 
                        ?>
		<?php echo $form->error($model,'porcentaje'); ?>
	</div>
        <hr class="separador_blanco">
	<div class="row">
		<?php echo $form->labelEx($model,'prioridad'); ?> 
                
		<?php
                    $prioridades = array();
                    for($i=20;$i>=1;$i--){
                        $prioridades["$i"]=$i;
                    }
                    echo $form->dropDownList($model,'prioridad',$prioridades); 
                ?>
                (20 es menor prioridad. 1 es m&aacute;xima prioridad)
		<?php echo $form->error($model,'prioridad'); ?>
	</div>
        <hr class="separador_blanco">
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->