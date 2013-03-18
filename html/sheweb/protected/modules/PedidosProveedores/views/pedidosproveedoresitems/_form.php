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
    
<?php 
        $this->menu=array(
                array('label'=>'Crear nuevo producto', 'url'=> Yii::app()->createUrl('/Parametros/item/create'), 'target'=>'_blank'),
               
        );
         
 ?>

	<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

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
        <div id='detalleitem'></div>
        <table border="0">
            <tr>
                <td colspan="2">
        <div class="row">
        <?php /*
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
            echo $form->error($model,'item_iditem');*/
        

            echo $form->labelEx($model,'item_iditem');
            $select = CHtml::listData(Item::model()->findAllBySql("select distinct i.iditem, i.nombre from item as i  inner join  item_has_terceros as it on it.item_iditem=i.iditem and it.terceros_idterceros=$pedido->idproveedor where i.estado='activo'"), 'iditem', 'nombre');
            echo $form->dropDownList($model,'item_iditem',$select,array('id'=>'item_iditem'));
            echo $form->error($model,'item_iditem');
        ?>
        </div>
                </td>
            </tr>
            <tr>
                <td>
        <?php
               /* $script = "
                    $('#item_iditem').ajaxSuccess(function(){ 
                              
                     });
                    ";
                 Yii::app()->clientScript->registerScript('form_js', $script);
            */
        ?>
            
        
	
	
        <div class="row">
		<?php echo $form->labelEx($model,'solicitado'); ?>
		<?php echo $form->textField($model,'solicitado'); ?>
		<?php echo $form->error($model,'solicitado'); ?>
	</div>
                </td>
                <td>
        <div class="row">
        <?php 
                echo "Proyecto:";
                $select = CHtml::listData(Proyectosespeciales::model()->findAll(), 'idproyectosespeciales', 'nombre');
                echo $form->dropDownList($model,'proyectosespeciales_idproyectosespeciales',$select);
        ?>
        </div>
        
                </td>
            </tr>
        </table>
        
        
        
        <hr class="separador_blanco">
        
        <div class="row">
        <?php 
                echo "Condicion Comercial:";
                $select = CHtml::listData(Condicioncomercial::model()->findAll(), 'idcondicioncomercial', 'nombre');
                echo $form->dropDownList($model,'condicioncomercial_idcondicioncomercial',$select);
        ?>
        </div>
        
        
        
        
        <hr class="separador_blanco">
        
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); 
                        echo "<div class='boton' style='float:left;'>";
                        echo CHtml::link("Cancelar",Yii::app()->createUrl($this->module->id."/pedidosproveedores/view", array("id"=>$pedidosproveedores_idpedidosproveedores)));
                        echo "</div>";  
                 ?>
	</div>

<?php $this->endWidget(); ?>

</div>


<?php

    $cs = Yii::app()->clientScript;
    $cs->registerCoreScript('jquery');
?>
<script type="text/javascript">
     jQuery(document).ready(function(){
         
         /////
        var $iditem = $('#item_iditem').val();
        $('#detalleitem').load('<?php
           echo  Yii::app()->baseUrl.'/PedidosProveedores/pedidosproveedores/getinfoitem/id/';
        ?>'+$iditem);
         /////
         
        $('#item_iditem').bind('change',function(){
            var $iditem = $('#item_iditem').val();
            $('#detalleitem').load('<?php echo  Yii::app()->baseUrl.'/PedidosProveedores/pedidosproveedores/getinfoitem/id/';?>'+$iditem);
        });
      });
</script>