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

        <?php echo $form->errorSummary(array($pedidosproveedores)); ?>
        <?php
            echo CHtml::link("Agregar nuevo item",Yii::app()->createUrl($this->module->id."/pedidosproveedoresitems/create", array("pedidosproveedores_idpedidosproveedores"=>$pedidosproveedores->idpedidosproveedores)));
        ?>
        <?php
            $Provider = new CActiveDataProvider('Pedidosproveedoresitems');
 
            $this->widget('ext.groupgridview.GroupGridView', array(
                'id' => 'grid1',
                'dataProvider' => $Provider,
                 'columns' => array(
                  'idpedidosproveedoresitems',
                  'item_iditem',
                  'solicitado',
                  'recibido',
                  array('class' => 'CButtonColumn',
                        'template'=>'{update}{delete}',
                        'buttons'=>array(
                                            'update'=>array('url'=>'Yii::app()->createUrl("/PedidosProveedores/pedidosproveedoresitems/update", array("id"=>$data->idpedidosproveedoresitems))'),
                                            'delete'=>array('url'=>'Yii::app()->createUrl("/PedidosProveedores/pedidosproveedoresitems/delete", array("id"=>$data->idpedidosproveedoresitems))'),
                                        ),
                      ),
                  
                ),
              ));
        ?>
        <hr class="separador_blanco">
        
	<div class="row buttons">
		<?php echo CHtml::submitButton($pedidosproveedores->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->