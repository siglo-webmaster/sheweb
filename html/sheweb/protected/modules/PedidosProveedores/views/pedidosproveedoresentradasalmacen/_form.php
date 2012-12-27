<?php
/* @var $this PedidosproveedoresentradasalmacenController */
/* @var $model Pedidosproveedoresentradasalmacen */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pedidosproveedoresentradasalmacen-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>



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
		<?php echo $form->hiddenField($model,'pedidosproveedores_idpedidosproveedores',array('value'=>$idpedidosproveedores)); ?>
		<?php echo $form->error($model,'pedidosproveedores_idpedidosproveedores'); ?>
	</div>
        
        <div class="grid-view">
            <table class="items">
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>Solicitado</th>
                        <th>Recibido</th>
                        <th>Recibir</th>
                        <th>Fallados</th>
                         <th>Observaciones Fallados</th>
                        <th>Finalizar</th>
                    </tr>
                </thead>
                <tbody>
        
        <?php
            
            foreach($items as $row){
                echo "<tr>";
                    echo"<td>".$row['nombre']."</td>";
                    echo"<td>".$row['solicitado']."</td>";
                    echo"<td>".$row['recibido']."</td>";
                    echo"<td><input type='text' size='4'></input></td>";
                    echo"<td><input type='text' size='4'></input></td>";
                    echo"<td><input type='text' size='8'></input></td>";
                    echo"<td><input type='checkbox'></input></td>";
                echo "</tr>";
            }
            

        ?>
                </tbody>
                </table>

            </div>
            
        <hr class="separador_blanco">
        
        <div class="row">
		<?php echo $form->labelEx($model,'observaciones'); ?>
		<?php echo $form->textArea($model,'observaciones',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'observaciones'); ?>
	</div>
        
        <hr class="separador_blanco">
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear Entrada' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->