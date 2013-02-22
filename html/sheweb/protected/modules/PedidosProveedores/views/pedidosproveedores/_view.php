<?php
/* @var $this PedidosproveedoresController */

?>
<?php
      if($data->estado=='impreso'){
          
      }

?>

<?php
    $separador="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";

?>
<div class="view" id="pedido">

        <b><h3>
        <?php
            echo CHtml::link("Pedido a proveedores #".$data->idpedidosproveedores,Yii::app()->createUrl('PedidosProveedores/pedidosproveedores/view',array('id'=>$data->idpedidosproveedores)));
        ?>
        </h3></b>
	        
        <b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
        <?php echo $separador; ?>
        
        <b><?php echo CHtml::encode($data->getAttributeLabel('tipopedidosproveedores_idtipopedidosproveedores')); ?>:</b>
	<?php echo CHtml::encode( (isset($data->tipopedidosproveedoresIdtipopedidosproveedores->nombre))?$data->tipopedidosproveedoresIdtipopedidosproveedores->nombre : 0); ?>
        <?php echo $separador; ?>
        <br>
        
        
        
	<b><?php echo CHtml::encode($data->getAttributeLabel('usuariocreacion')); ?>:</b>
	<?php 
                if(isset($data->usuariocreacion0->username)){
                    echo CHtml::encode($data->usuariocreacion0->username);
                }
        ?>
	<?php echo $separador; ?>

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuarioaprobacion')); ?>:</b>
	<?php 
            if(isset($data->usuarioaprobacion0->username)){
                echo CHtml::encode($data->usuarioaprobacion0->username); 
            }
         ?>
        <?php echo $separador; ?>
        <div id='ver-opciones'>
            
        <?php
            if(isset($pedidosproveedoresdocumentos)){
                echo "<hr>
                        <b>Documentos anexos: </b>
                        <ul>";
                
                foreach($pedidosproveedoresdocumentos as $row){
                    switch($row['tiposdocumentosanexos_idtiposdocumentosanexos']){
                        case 1:{
                            echo "<li>".CHtml::link($row['nombre'],Yii::app()->createUrl($row['url']),array('target'=>'_blank'))."</li>";
                            break;
                        }
                        case 2:{
                            $row['url'] = ltrim($row['url'],'http://');
                            echo "<li> <a href='http://".$row['url']."' target='_blank'>".$row['url']."</a></li>";
                            break;
                        }
                        default :{
                            echo "<li>".$row['url']."</li>";
                            break;
                        }
                    }
                    
                }
                echo "</ul>";
            }
        ?>  
            
            
            
            <hr>
            <table>
                <tr>
                    <?php switch($data->estado){
                               case 'activo':{
                                   //AGREGAR NUEVO ITEM
                                   echo "<td>";
                                   echo "<div class='boton'>";
                                   echo CHtml::link("Agregar nuevo item",Yii::app()->createUrl($this->module->id."/pedidosproveedoresitems/create", array("pedidosproveedores_idpedidosproveedores"=>$data->idpedidosproveedores)));
                                   echo "</div>";
                                   echo "</td>";
                                   
                                   //CAMBIAR ESTADO
                                   echo "<td>";
                                   echo "<div class='boton'>";
                                   echo CHtml::link("Cambiar estado",Yii::app()->createUrl($this->module->id."/pedidosproveedores/changestate", array("id"=>$data->idpedidosproveedores)));
                                   echo "</div>";
                                   echo "</td>";
                                   
                                   ///HACER CARGA MASIVA DESDE EXCELL
                                   echo "<td>";
                                   echo "<div class='boton'>";
                                   echo CHtml::link("Carga desde EXCEL",Yii::app()->createUrl("PedidosProveedores/cargasexcel/create/id/".$data->idpedidosproveedores));
                                   echo "</div>";
                                   echo "</td>";
                                   break;
                               }
                               
                               case 'aprobado':{
                                   echo "<td>";
                                   echo "<div class='boton'>";
                                   echo CHtml::link("Generar Impresion de Orden",Yii::app()->createUrl($this->module->id."/pedidosproveedores/printorder", array("id"=>$data->idpedidosproveedores)));
                                   echo "</div>";
                                   echo "</td>";
                                    //CAMBIAR ESTADO
                                   echo "<td>";
                                   echo "<div class='boton'>";
                                   echo CHtml::link("Cambiar estado",Yii::app()->createUrl($this->module->id."/pedidosproveedores/changestate", array("id"=>$data->idpedidosproveedores)));
                                   echo "</div>";
                                   echo "</td>";
                                   break;
                               }
                               
                               case 'impreso':{
                                   echo "<td>";
                                 
                                   ///EMAIL
                                    if(!isset($mail)){
                                        $mail=false;
                                    }
                                    if($mail){
                                        $html = $this->renderPartial('view',array('model'=>$data,'pedidosproveedoresdocumentos'=>$pedidosproveedoresdocumentos,'mail'=>false),true);
                                        Yii::app()->mailer->AddAddress($data->idproveedor0->email);
                                        Yii::app()->mailer->AddAddress("oborja@siglodelhombre.com");
                                        Yii::app()->mailer->Subject = "Pedido a proveedores # ".$data->idpedidosproveedores;
                                        Yii::app()->mailer->MsgHTML($html);
                                        Yii::app()->mailer->Send();
                                        echo "<b>Pedido a proveedor enviado al correo: </b>".$data->idproveedor0->email;
                                    }else{
                                        echo "<div style='float:right; margin: 0 10px 0 10px;'>";
                                        echo CHtml::link("<img src='".Yii::app()->createUrl('images/basic/email-out.png')."'>",Yii::app()->createUrl($this->module->id."/pedidosproveedores/view", array("id"=>$data->idpedidosproveedores,'mail'=>true)));
                                        echo "</div>";
                                    }
                                    
                                    //FIN EMAIL
                                    
                                    //IMPRESION
                               
                                   $this->widget('ext.mPrint.mPrint', array(
                                        'title' => 'Siglo del Hombre Editores S.A.',        //the title of the document. Defaults to the HTML title
                                        'tooltip' => 'Imprimir',    //tooltip message of the print icon. Defaults to 'print'
                                        'text' => NULL, //text which will appear beside the print icon. Defaults to NULL
                                        'element' => '#pedido',      //the element to be printed.
                                        'exceptions' => array(     //the element/s which will be ignored
                                            '.summary',
                                            '.search-form',
                                            '#ver-opciones',
                                        ),
                                        'publishCss' => true       //publish the CSS for the whole page?
                                    ));
                                   
                                   //FIN IMPRESION
                                   echo "</td>";
                                   break;
                               }
                           }
                           
                           //echo CHtml::link("Ver opciones ", array('view', 'id'=>$data->idpedidosproveedores)); ?></td>
                </tr>
            </table>
        
        </div>
        
	<br />
        
	<b><?php echo CHtml::encode($data->getAttributeLabel('idproveedor')); ?>:</b>
	<?php echo CHtml::encode($data->idproveedor0->nombre); ?>
	<?php echo $separador; ?>

	<b><?php echo CHtml::encode($data->getAttributeLabel('moneda_idmoneda')); ?>:</b>
	<?php echo CHtml::encode($data->monedaIdmoneda->nombre); ?>
	<?php echo $separador; ?>
        
        <b><?php echo "Transporte: "; ?></b>
	<?php 
                if(isset($data->tipostransporteIdtipostransporte->nombre)){
                    echo CHtml::encode($data->tipostransporteIdtipostransporte->nombre);
                }
        ?>
        <br />
	

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechacreacion')); ?>:</b>
	<?php echo CHtml::encode($data->fechacreacion); ?>
	<?php echo $separador; ?>

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechacierre')); ?>:</b>
	<?php echo CHtml::encode($data->fechacierre); ?>
	<?php echo $separador; ?>
        
        <b><?php echo CHtml::encode($data->getAttributeLabel('fechaaprobacion')); ?>:</b>
	<?php echo CHtml::encode($data->fechaaprobacion); ?>
	<?php echo $separador; ?>

        
	<br />
        
        
         <?php
            $Provider = new CActiveDataProvider('ViewPedidosproveedoresitemsagrupado', array('criteria'=>array('condition'=>'pedidosproveedores_idpedidosproveedores='.$data->idpedidosproveedores)));
            
            switch($data->estado){
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
            
            
            if($data->estado=='activo'){
                $columnas = array(
                  'item_iditem',
                  'nombre',
                  'condicioncomercial',
                  'solicitado',
                  'confirmado',
                  'reservado',
                  array('class' => 'CLinkColumn',
                        'header'=>'Accion',
                        'label'=>'reservar',
                        'urlExpression'=>'Yii::app()->createUrl("/PedidosProveedores/pedidosproveedoresitemdetallereserva/getreservas/id/".$data->idpedidosproveedoresitems)',
                  ),
                  array('class' => 'CButtonColumn',
                        'header'=>'Opciones',
                        'template'=>'{update}{delete}',
                        'buttons'=>array(
                                            'update'=>array('url'=>'Yii::app()->createUrl("/PedidosProveedores/pedidosproveedoresitems/update", array("id"=>$data->idpedidosproveedoresitems))'),
                                            'delete'=>array('url'=>'Yii::app()->createUrl("/PedidosProveedores/pedidosproveedoresitems/delete", array("id"=>$data->idpedidosproveedoresitems))'),
                                        ),
                      ),
                  
                );
            }else{
                $columnas = array(
                  'item_iditem',
                  'nombre',
                  'condicioncomercial', 
                  'solicitado',
                  'confirmado',
                  $accion,  
                );
            }
            
            $this->widget('ext.groupgridview.GroupGridView', array(
                'id' => 'grid1',
                'dataProvider' => $Provider,
                'mergeColumns' => array('nombre'),
                 'columns' => $columnas,
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