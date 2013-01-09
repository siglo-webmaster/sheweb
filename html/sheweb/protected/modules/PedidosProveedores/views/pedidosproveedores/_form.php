<?php
/* @var $this PedidosproveedoresController */
/* @var $model Pedidosproveedores */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pedidosproveedores-form',
	'enableAjaxValidation'=>true,
        'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

    
	<p class="note">Fields with <span class="required">*</span> are required.</p>

        <?php echo $form->errorSummary(array($pedidosproveedores,$pedidosproveedoresdocumentos)); ?>

	

	<div class="row">
		<?php echo $form->labelEx($pedidosproveedores,'idproveedor'); ?>
		<?php 
                
                    $select = CHtml::listData(Terceros::model()->findAll("idterceros in (select distinct terceros_idterceros from terceros_has_tiposterceros where tiposterceros_idtiposterceros=2) and estado='activo'"), 'idterceros', 'nombre');
                    echo $form->dropDownList($pedidosproveedores,'idproveedor',$select,
                        array(
                         'ajax'=>   array(
                                'type'=>'POST',
                                'url'=>CController::createUrl('PedidosProveedores/pedidosproveedores/dinamicmoneda'),
                                'update'=>'moneda_idmoneda'
                         ),   
                        )
                    );
                    
                ?>
		<?php echo $form->error($pedidosproveedores,'idproveedor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($pedidosproveedores,'moneda_idmoneda'); ?>
		<?php 
                
                    $select = CHtml::listData(Moneda::model()->findAll(), 'idmoneda', 'nombre');
                    
                    echo $form->dropDownList($pedidosproveedores,'moneda_idmoneda',$select);
                ?>
		<?php echo $form->error($pedidosproveedores,'moneda_idmoneda'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($pedidosproveedores,'tipopedidosproveedores_idtipopedidosproveedores'); ?>
		<?php 
                
                    $select = CHtml::listData(Tipopedidosproveedores::model()->findAll(), 'idtipopedidosproveedores', 'nombre');
                    
                    echo $form->dropDownList($pedidosproveedores,'tipopedidosproveedores_idtipopedidosproveedores',$select);
                ?>
		<?php echo $form->error($pedidosproveedores,'tipopedidosproveedores_idtipopedidosproveedores'); ?>
	</div>
        
        <hr class='separador_blanco'>
        
         <div class="row">
        <?php echo $form->labelEx($pedidosproveedores,'fechacierre'); ?>
        <?php
            if ($pedidosproveedores->fechacierre!='') {
                $pedidosproveedores->fechacierre=date('Y-m-d',strtotime($pedidosproveedores->fechacierre));
                
            }
            $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                'model'=>$pedidosproveedores,
                'attribute'=>'fechacierre',
                'value'=>$pedidosproveedores->fechacierre,
                'language' => 'es',
                'htmlOptions' => array('readonly'=>"readonly"),
                'options'=>array(
                    'autoSize'=>true,
                    'defaultDate'=>$pedidosproveedores->fechacierre,
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
		<?php echo $form->error($pedidosproveedores,'fechacierre'); ?>
	</div>

	<div class="row">
            <?php echo $form->labelEx($pedidosproveedores,'fechaestimada'); ?>
            <?php
            if ($pedidosproveedores->fechaestimada!='') {
                $pedidosproveedores->fechaestimada=date('Y-m-d',strtotime($pedidosproveedores->fechaestimada));
                
            }
            $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                'model'=>$pedidosproveedores,
                'attribute'=>'fechaestimada',
                'value'=>$pedidosproveedores->fechaestimada,
                'language' => 'es',
                'htmlOptions' => array('readonly'=>"readonly"),
                'options'=>array(
                    'autoSize'=>true,
                    'defaultDate'=>$pedidosproveedores->fechaestimada,
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
            <?php echo $form->error($pedidosproveedores,'fechaestimada'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($pedidosproveedores,'descripcion'); ?>
		<?php echo $form->textArea($pedidosproveedores,'descripcion', array('rows'=>4,'cols'=>80)); ?>
		<?php echo $form->error($pedidosproveedores,'descripcion'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($pedidosproveedoresdocumentos,'url'); ?>
                <?php echo $form->fileField($pedidosproveedoresdocumentos, 'url'); ?>
		<?php echo $form->error($pedidosproveedoresdocumentos,'url'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($pedidosproveedores,'observaciones'); ?>
		<?php echo $form->textArea($pedidosproveedores,'observaciones', array('rows'=>4,'cols'=>80)); ?>
		<?php echo $form->error($pedidosproveedores,'observaciones'); ?>
	</div>
        
        <hr class="separador_blanco">
        
            
        
	<div class="row buttons">
		<?php echo CHtml::submitButton($pedidosproveedores->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->