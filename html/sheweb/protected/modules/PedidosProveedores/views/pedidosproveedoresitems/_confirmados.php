<?php
/* @var $this PedidosproveedoresitemsController */
/* @var $model Pedidosproveedoresitems */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pedidosproveedoresitems-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
        
                    
	<div class="row">
            <?php
                    $campo = true;
                    if(isset($pedidosproveedores_idpedidosproveedores)){
                        if($pedidosproveedores_idpedidosproveedores!=false){
                            echo $form->hiddenField($model,'pedidosproveedores_idpedidosproveedores',array('value'=>$pedidosproveedores_idpedidosproveedores));
                            $pedido = Pedidosproveedores::model()->findByPk($pedidosproveedores_idpedidosproveedores);
                            $campo = false;
                        }
                    }
                    if($campo){
                        echo $form->labelEx($model,'pedidosproveedores_idpedidosproveedores'); 
                        echo $form->textField($model,'pedidosproveedores_idpedidosproveedores');
                        echo $form->error($model,'pedidosproveedores_idpedidosproveedores'); 
                    }
                
            ?>
	</div>
        
        
       
        <div class="row">
        <?php
            echo $form->labelEx($model,'item_iditem'); 
            if($model->isNewRecord ){
                $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
                    'name'=>'Pedidosproveedoresitems[item_iditem]',
                    'value'=>$model->item_iditem,
            //	'source'=>$people, // <- use this for pre-set array of values
                    'source'=>Yii::app()->createUrl($this->module->id."/item/getItem/idproveedor/" . $pedido->idproveedor),// <- path to controller which returns dynamic data
                    // additional javascript options for the autocomplete plugin
                    'options'=>array(
                            'minLength'=>'1', // min chars to start search
                            'select'=>'js:function(event, ui) { console.log(ui.item.id +":"+ui.item.value); }'
                    ),
                    'htmlOptions'=>array(
                            'id'=>'item_iditem',
                            'rel'=>'val',
                    ),
            ));
            }else{
                echo "[".$model->item_iditem."]" . $model->itemIditem->nombre;
            }
            echo $form->error($model,'item_iditem');
        ?>
        </div>
            
	<?php /*<div class="row">
		
		<?php echo $form->textField($model,'item_iditem'); ?>
		<?php echo $form->error($model,'item_iditem'); ?>
	</div>
         * 
         */
        ?>
        
        <div class="row">
		<?php echo $form->labelEx($model,'confirmado'); ?>
		<?php echo $form->textField($model,'confirmado'); ?>
		<?php echo $form->error($model,'confirmado'); ?>
	</div>

        
        <hr class="separador_blanco">
        
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->