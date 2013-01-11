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
        
        <div class="grid-view" >
            <table class="items">
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>Tipo</th>
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
            $i=0;
            foreach($items as $row){
                echo "<tr>";
                    echo"<td>".$row['nombre'].
                            "<input type='hidden' name='idpedidosproveedoresitems_".$i."' value='".$row['idpedidosproveedoresitems']."' >".
                            "<input type='hidden' name='iditem_".$i."' value='".$row['item_iditem']."' >".
                         "</td>";
                    echo"<td>".$row['condicioncomercial']."<input type='hidden' size='4' name='idcondicioncomercial_".$i."' value='".$row['idcondicioncomercial']."'></input></td>";
                    echo"<td>".$row['solicitado']."</td>";
                    echo"<td>".$row['recibido']."</td>";
                    echo"<td><input type='text' size='4' name='recibir_".$i."'></input></td>";
                    echo"<td><input type='text' size='4' name='fallado_".$i."'></input></td>";
                    echo"<td><input type='text' size='8' name='observaciones_".$i."'></input></td>";
                    echo"<td><input type='checkbox' name='finalizar_".$i."'></input></td>";
                echo "</tr>";
                $i++;
            }
            
            echo "<input type='hidden' name='numeroitems' value='".$i."' >";
        ?>
                </tbody>
                </table>

            </div>
            
        <hr class="separador_blanco">
        
        <div class="row">
		<?php echo $form->labelEx($model,'documentoproveedor'); ?>
		<?php echo $form->textField($model,'documentoproveedor',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'documentoproveedor'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($model,'observaciones'); ?>
		<?php echo $form->textArea($model,'observaciones',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'observaciones'); ?>
	</div>
        
        <hr class="separador_blanco">
        <input type="checkbox" name="cerrarpedido" value="cerrar"> Cerrar este pedido y no recibir mas mercancia
        <hr class="separador_blanco">
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear Entrada' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->