<?php
/* @var $this PedidosproveedoresController */
/* @var $model Pedidosproveedores */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pedidosproveedores-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
        
        <div class="row">
		<?php echo $form->labelEx($model,'idproveedor'); ?>
                <?php 
                
                 $proveedorOptions = CHtml::listData(Terceros::model()->findAll(), 'idterceros', 'nombre');
                    echo $form->dropDownList($model,'idproveedor',$proveedorOptions);
                ?>
		
		<?php echo $form->error($model,'idproveedor'); ?>
	</div>
        
         <div class="row">
		<?php echo $form->labelEx($model,'moneda_idmoneda'); ?>
		<?php 
                //echo $form->textField($model,'moneda_idmoneda'); 
                 $monedaOptions = CHtml::listData(Moneda::model()->findAll(), 'idmoneda', 'nombre');
                    echo $form->dropDownList($model,'moneda_idmoneda',$monedaOptions);
                ?>
		<?php echo $form->error($model,'moneda_idmoneda'); ?>
	</div>
        
         <div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textArea($model,'descripcion', array('rows'=>4,'cols'=>80)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>
        
        <div class="row">
        <?php echo $form->labelEx($model,'fechacierre'); ?>
        <?php
            if ($model->fechacierre!='') {
                $model->fechacierre=date('d-m-Y',strtotime($model->fechacierre));
                
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
            <?php echo $form->labelEx($model,'fechaestimada'); ?>
            <?php
            if ($model->fechaestimada!='') {
                $model->fechaestimada=date('d-m-Y',strtotime($model->fechaestimada));
                
            }
            $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                'model'=>$model,
                'attribute'=>'fechaestimada',
                'value'=>$model->fechaestimada,
                'language' => 'es',
                'htmlOptions' => array('readonly'=>"readonly"),
                'options'=>array(
                    'autoSize'=>true,
                    'defaultDate'=>$model->fechaestimada,
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
            <?php echo $form->error($model,'fechaestimada'); ?>
	</div>
 
       
        <div class="row">
		<?php echo $form->labelEx($model,'observaciones'); ?>
		<?php echo $form->textArea($model,'observaciones',array('rows'=>4,'cols'=>80)); ?>
		<?php echo $form->error($model,'observaciones'); ?>
	</div>
        
        <!--FIN OK-->
        
        <!-- INICIO MULTYFORM -->
        <hr>
        <div class="row">
        <?php
            $multiFormConfig = array(
                                        'elements'=>array(
                                                            
                                                            'url'=>array(
                                                                                 'type'=>'file',
                                                                                'maxlength'=>40,
                                                            ),
                                    ));
            
            
            $this->widget('ext.multimodelform.MultiModelForm',array(
                                                                    'id' => 'id_member', //the unique widget id
                                                                    'formConfig' => $multiFormConfig, //the form configuration array
                                                                    'model' => $pedidosprovedoresdocumentos, //instance of the form model

                                                                    //if submitted not empty from the controller,
                                                                    //the form will be rendered with validation errors
                                                                    'validatedItems' => $validatedPedidosprovedoresdocumentos,

                                                                    //array of member instances loaded from db
                                                                    'data' => $pedidosprovedoresdocumentos->findAll('pedidosproveedores_idpedidosproveedores=:idpedidosproveedores', array(':idpedidosproveedores'=>$pedidosprovedoresdocumentos->pedidosproveedores_idpedidosproveedores)),
                    ));
            
        ?>
        </div>
        <hr>
	<!-- FIN MULTIFORM -->
	
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->