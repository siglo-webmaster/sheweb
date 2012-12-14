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
		<?php echo $form->labelEx($model,'moneda_idmoneda'); ?>
		<?php 
                //echo $form->textField($model,'moneda_idmoneda'); 
                 $monedaOptions = CHtml::listData(Moneda::model()->findAll(), 'idmoneda', 'nombre');
                    echo $form->dropDownList($model,'moneda_idmoneda',$monedaOptions);
                ?>
		<?php echo $form->error($model,'moneda_idmoneda'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idproveedor'); ?>
		<?php echo $form->textField($model,'idproveedor'); ?>
		<?php echo $form->error($model,'idproveedor'); ?>
	</div>

        <!--FIN OK-->
        
	<div class="row">
		<?php echo $form->labelEx($model,'usuariocreacion'); ?>
		<?php echo $form->textField($model,'usuariocreacion'); ?>
		<?php echo $form->error($model,'usuariocreacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usuarioaprobacion'); ?>
		<?php echo $form->textField($model,'usuarioaprobacion'); ?>
		<?php echo $form->error($model,'usuarioaprobacion'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'fechacreacion'); ?>
		<?php echo $form->textField($model,'fechacreacion'); ?>
		<?php echo $form->error($model,'fechacreacion'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'fechaaprobacion'); ?>
		<?php echo $form->textField($model,'fechaaprobacion'); ?>
		<?php echo $form->error($model,'fechaaprobacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaentrada'); ?>
		<?php echo $form->textField($model,'fechaentrada'); ?>
		<?php echo $form->error($model,'fechaentrada'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaliberacion'); ?>
		<?php echo $form->textField($model,'fechaliberacion'); ?>
		<?php echo $form->error($model,'fechaliberacion'); ?>
	</div>

	
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->