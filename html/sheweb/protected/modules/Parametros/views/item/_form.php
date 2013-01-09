<?php
/* @var $this ItemController */
/* @var $model Item */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'item-form',
	'enableAjaxValidation'=>false,
)); ?>

   
    
	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($item); ?>

	<div class="row">
		<?php echo $form->labelEx($item,'editorial_ideditorial'); ?>
                <?php 
                    $select = CHtml::listData(Editorial::model()->findAll(), 'ideditorial', 'nombre');
                    echo $form->dropDownList($item,'editorial_ideditorial',$select);
                ?>
		<?php echo $form->error($item,'editorial_ideditorial'); ?>
	</div>

        
	<div class="row">
		<?php echo $form->labelEx($item,'fechaedicion'); ?>
		
                <?php
                    if ($item->fechaedicion!='') {
                        $item->fechaedicion=date('Y-m-d',strtotime($item->fechaedicion));

                    }
                    $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                        'model'=>$item,
                        'attribute'=>'fechaedicion',
                        'value'=>$item->fechaedicion,
                        'language' => 'es',
                        'htmlOptions' => array('readonly'=>"readonly"),
                        'options'=>array(
                            'autoSize'=>true,
                            'defaultDate'=>$item->fechaedicion,
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
            
		<?php echo $form->error($item,'fechaedicion'); ?>
	</div>
        
        <div class="row">
         <?php echo $form->labelEx($item,'tipoformato'); ?>
         <?php
                $data= CHtml::listData(Tipoformato::model()->findAll(), 'idtipoformato', 'nombre');
                $this->widget('ext.EchMultiSelect.EchMultiSelect', array(
                        'name' => 'item_has_tipoformato[]',    
                        'data' => $data,
                        'value'=>$item_has_tipoformato,
                        'dropDownHtmlOptions'=> array(
                            'style'=>'width:100px;',
                        ),
                    ));
        ?>
        </div>
        
	<div class="row">
		<?php echo $form->labelEx($item,'nombre'); ?>
		<?php echo $form->textField($item,'nombre',array('size'=>60,'maxlength'=>512)); ?>
		<?php echo $form->error($item,'nombre'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($item,'Proveedor'); ?>
                <?php 
                    $select = CHtml::listData(ViewProveedores::model()->findAll(), 'idterceros', 'nombre');
                    echo $form->dropDownList($item_has_terceros,'terceros_idterceros',$select);
                ?>
		
	</div>

	<div class="row">
		<?php echo $form->labelEx($item,'isbn'); ?>
		<?php echo $form->textField($item,'isbn',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($item,'isbn'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($item,'barcode'); ?>
		<?php echo $form->textField($item,'barcode',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($item,'barcode'); ?>
	</div>

        <div class="row">
         <?php echo $form->labelEx($item,'autor'); ?>
         <?php
                $data= CHtml::listData(Autor::model()->findAll(), 'idautor', 'nombre');
                $this->widget('ext.EchMultiSelect.EchMultiSelect', array(
                        'name' => 'item_has_autor[]',
                        'data' => $data,
                        'value'=>$item_has_autor,
                        'dropDownHtmlOptions'=> array(
                            'style'=>'width:378px;',
                            
                        ),
                    ));
        ?>
        </div>
        
        <div class="row">
         <?php echo $form->labelEx($item,'categoria'); ?>
         <?php
                $data2= CHtml::listData(Categoria::model()->findAll(), 'idcategoria', 'nombre');
                $this->widget('ext.EchMultiSelect.EchMultiSelect', array(
                        'name' => 'item_has_categoria[]',    
                        'data' => $data2,
                        'value'=>$item_has_categoria,
                        'dropDownHtmlOptions'=> array(
                            'style'=>'width:378px;',
                            
                        ),
                    ));
        ?>
        </div>
        
       

	<div class="row">
		
		<?php echo $form->hiddenField($item,'temporal',array('value'=>'1')); ?>
		<?php echo $form->error($item,'temporal'); ?>
	</div>

        <hr class="separador_blanco">
	<div class="row">
		<?php echo $form->labelEx($item,'estado'); ?>
		<?php echo $form->dropDownList($item,'estado',array("activo"=>"activo","inactivo"=>"inactivo")); ?>
		<?php echo $form->error($item,'estado'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($item,'temporal'); ?>
		<?php echo $form->dropDownList($item,'temporal',array('1'=>'Si','0'=>'No')); ?>
		<?php echo $form->error($item,'temporal'); ?>
	</div>

        <hr class="separador_blanco">
        
	<div class="row buttons">
		<?php echo CHtml::submitButton($item->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->