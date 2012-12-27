<?php
/* @var $this PedidosproveedoresController */

?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idpedidosproveedores')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idpedidosproveedores), array('view', 'id'=>$data->idpedidosproveedores)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuariocreacion')); ?>:</b>
	<?php echo CHtml::encode($data->usuariocreacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuarioaprobacion')); ?>:</b>
	<?php echo CHtml::encode($data->usuarioaprobacion); ?>
	<br />
        
	<b><?php echo CHtml::encode($data->getAttributeLabel('idproveedor')); ?>:</b>
	<?php echo CHtml::encode($data->idproveedor0->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('moneda_idmoneda')); ?>:</b>
	<?php echo CHtml::encode($data->monedaIdmoneda->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechacreacion')); ?>:</b>
	<?php echo CHtml::encode($data->fechacreacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechacierre')); ?>:</b>
	<?php echo CHtml::encode($data->fechacierre); ?>
	<br />

        <b>
        <?php
             echo CHtml::link("Agregar nuevo item",Yii::app()->createUrl($this->module->id."/pedidosproveedoresitems/create", array("pedidosproveedores_idpedidosproveedores"=>$data->idpedidosproveedores)));
        ?>
        </b>
	<br />
        
        
         <?php
            $Provider = new CActiveDataProvider('ViewPedidosproveedoresitemsagrupado', array('criteria'=>array('condition'=>'pedidosproveedores_idpedidosproveedores='.$data->idpedidosproveedores)));
 
            $this->widget('ext.groupgridview.GroupGridView', array(
                'id' => 'grid1',
                'dataProvider' => $Provider,
                'mergeColumns' => array('nombre'),
                 'columns' => array(
                  'nombre',
                  'solicitado',
                  'reservado',
                  array('class' => 'CLinkColumn',
                        'header'=>'Reservar',
                        'label'=>'reservar',
                        'urlExpression'=>'Yii::app()->createUrl("/PedidosProveedores/pedidosproveedoresitemdetallereserva/create", array("idpedidosproveedoresitems"=>$data->idpedidosproveedoresitems))',
                  ),
                  array('class' => 'CButtonColumn',
                        'header'=>'Opciones',
                        'template'=>'{update}{delete}',
                        'buttons'=>array(
                                            'update'=>array('url'=>'Yii::app()->createUrl("/PedidosProveedores/pedidosproveedoresitems/update", array("id"=>$data->idpedidosproveedoresitems))'),
                                            'delete'=>array('url'=>'Yii::app()->createUrl("/PedidosProveedores/pedidosproveedoresitems/delete", array("id"=>$data->idpedidosproveedoresitems))'),
                                        ),
                      ),
                  
                ),
              ));
        ?>
        
	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaestimada')); ?>:</b>
	<?php echo CHtml::encode($data->fechaestimada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaaprobacion')); ?>:</b>
	<?php echo CHtml::encode($data->fechaaprobacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaentrada')); ?>:</b>
	<?php echo CHtml::encode($data->fechaentrada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaliberacion')); ?>:</b>
	<?php echo CHtml::encode($data->fechaliberacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observaciones')); ?>:</b>
	<?php echo CHtml::encode($data->observaciones); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />

	*/ ?>

</div>