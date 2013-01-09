<?php
/* @var $this PedidosproveedoresController */
/* @var $model Pedidosproveedores */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pedidosproveedores-form',
	'enableAjaxValidation'=>false,
        'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

    <h2>ATENCION!!</h2>
	<p class="note">A partir de este punto, los cambios sobre la orden de compra NO PODRAN SER REVERTIDOS.<br>Genere la impresion de orden unicamente si esta seguro que toda la informacion consignada en el pedido es correcta.</p>

        <?php echo $form->errorSummary(array($pedidosproveedores)); ?>

 
        <hr class="separador_blanco">
        
       	<?php echo $form->hiddenField($pedidosproveedores,'estado',array('value'=>'impreso'));?>

        
	<div class="row buttons">
		<?php echo CHtml::submitButton("Proceder a generar impresion de orden"); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->