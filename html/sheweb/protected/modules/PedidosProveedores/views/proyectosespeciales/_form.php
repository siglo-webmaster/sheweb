<?php
/* @var $this ProyectosespecialesController */
/* @var $model Proyectosespeciales */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'proyectosespeciales-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idcliente'); ?>
		
                <?php 
                    $select = CHtml::listData(Terceros::model()->findAll("idterceros in (select distinct terceros_idterceros from terceros_has_tiposterceros where tiposterceros_idtiposterceros=1) and estado='activo'"), 'idterceros', 'nombre');
                    echo $form->dropDownList($model,'idcliente',$select); //jairo sanchez                    
                ?>
            
            
		<?php echo $form->error($model,'idcliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'moneda_idmoneda'); ?>
		
                <?php 
                    $select = CHtml::listData(Moneda::model()->findAll(),'idmoneda','nombre');
                    echo $form->dropDownList($model,'moneda_idmoneda',$select); //jairo sanchez                    
                ?>
		<?php echo $form->error($model,'moneda_idmoneda'); ?>
	</div>

        <div class="row">
         
         <?php
                echo "<b>Usuarios:</b>";
                $data= CHtml::listData(UsergroupsUser::model()->findAll(), 'id', 'username');
                $this->widget('ext.EchMultiSelect.EchMultiSelect', array(
                        'name' => 'usergroups_user[]',    
                        'data' => $data,
                        'value'=>$proyectosespecialesuser,
                        'dropDownHtmlOptions'=> array(
                            'style'=>'width:100px;',
                        ),
                    ));
        ?>
            
            
        </div>
        
	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>
        
        
        <hr class="separador_blanco">
            
	<div class="row">
		<?php echo $form->labelEx($model,'fechainicio'); ?>
		<?php
                    if ($model->fechainicio!='') {
                        $model->fechainicio=date('Y-m-d',strtotime($model->fechainicio));

                    }
                    $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                        'model'=>$model,
                        'attribute'=>'fechainicio',
                        'value'=>$model->fechainicio,
                        'language' => 'es',
                        'htmlOptions' => array('readonly'=>"readonly"),
                        'options'=>array(
                            'autoSize'=>true,
                            'defaultDate'=>$model->fechainicio,
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
		<?php echo $form->error($model,'fechainicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechacierre'); ?>
		<?php
            if ($model->fechacierre!='') {
                $model->fechacierre=date('Y-m-d',strtotime($model->fechacierre));
                
            }
            $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                'model'=>$model,
                'attribute'=>'fechacierre',
                'value'=>$model->fechacierre,
                'language' => 'es',
                'htmlOptions' => array('readonly'=>"readonly"),
                'options'=>array(
                    'autoSize'=>true,
                    'defaultDate'=>$model->fechacierre,
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
		<?php echo $form->error($model,'fechacierre'); ?>
	</div>

        
        
	<div class="row">
		<?php echo $form->labelEx($model,'observaciones'); ?>
		<?php echo $form->textArea($model,'observaciones', array('rows'=>4,'cols'=>80)); ?>
		<?php echo $form->error($model,'observaciones'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->dropDownList($model,'estado',array('activo'=>'activo','inactivo'=>'inactivo','cerrado'=>'cerrado')); ?>
		<?php echo $form->error($model,'estado'); ?>
	</div>

        <hr class='separador_blanco'>
        
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->