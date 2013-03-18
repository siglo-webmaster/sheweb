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
                    echo "<div class='boton'>";
                    echo CHtml::link("Cancelar",Yii::app()->createUrl($this->module->id."/pedidosproveedores/view", array("id"=>$pedidosproveedores->idpedidosproveedores)));
                    echo "</div>"; 
        ?>
            
        </div>
        <?php
            
            switch($pedidosproveedores->estado){
                case 'activo':{
                    $accion = array('class' => 'CLinkColumn',
                                    'header'=>'Accion',
                                    'label'=>'Reservar',
                                    'urlExpression'=>'Yii::app()->createUrl("/PedidosProveedores/pedidosproveedoresitemdetallereserva/getreservas/id/".$data->idpedidosproveedoresitems)',
                              );
                    break;
                }

                case 'impreso':{
                    $accion = array('class' => 'CLinkColumn',
                                    'header'=>'Accion',
                                    'label'=>'confirmar',
                                    'urlExpression'=>'Yii::app()->createUrl("/PedidosProveedores/pedidosproveedoresitems/confirmados/id/".$data->idpedidosproveedoresitems)',
                              );
                    break;
                }
                
                default: {
                    $accion=array('name'=>'',
                            'value'=>'',
                        );
                }
            }
            
            $Provider = new CActiveDataProvider('ViewPedidosproveedoresitemsagrupado', array('criteria'=>array('condition'=>'pedidosproveedores_idpedidosproveedores='.$pedidosproveedores->idpedidosproveedores)));
 
            $this->widget('ext.groupgridview.GroupGridView', array(
                'id' => 'grid1',
                'dataProvider' => $Provider,
                'mergeColumns' => array('nombre'),
                 'columns' => array(
                  'nombre',
                  'proyectosespeciales_idproyectosespeciales',
                  'condicioncomercial',
                  'solicitado',
                  'confirmado',
                  'reservado',
                  $accion,
                   
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