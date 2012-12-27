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
        <div>
        <?php
            echo CHtml::link("[ Agregar nuevo item ]",Yii::app()->createUrl($this->module->id."/pedidosproveedoresitems/create", array("pedidosproveedores_idpedidosproveedores"=>$pedidosproveedores->idpedidosproveedores)));
        ?>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <?php
            echo CHtml::link("[ Regresar ]",Yii::app()->createUrl($this->module->id."/pedidosproveedores/view", array("id"=>$pedidosproveedores->idpedidosproveedores)));
        ?>
            
        </div>
        <?php
            $Provider = new CActiveDataProvider('ViewPedidosproveedoresitemsagrupado', array('criteria'=>array('condition'=>'pedidosproveedores_idpedidosproveedores='.$pedidosproveedores->idpedidosproveedores)));
 
            $this->widget('ext.groupgridview.GroupGridView', array(
                'id' => 'grid1',
                'dataProvider' => $Provider,
                'mergeColumns' => array('nombre'),
                 'columns' => array(
                  'nombre',
                  'solicitado',
                  'reservado',
                  array('class' => 'CLinkColumn',
                        'header'=>'Accion',
                        'label'=>'Reservar',
                        'urlExpression'=>'Yii::app()->createUrl("/PedidosProveedores/pedidosproveedoresitemdetallereserva/getreservas/id/".$data->idpedidosproveedoresitems)',
                  ),
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
        

<?php $this->endWidget(); ?>

</div><!-- form -->