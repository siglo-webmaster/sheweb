

<?php
    $separador="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";

?>
<div class="view" id="pedido">

        <b><h3>
        <?php
            echo "Pedido a proveedores #".$model->idpedidosproveedores;//,Yii::app()->createUrl('PedidosProveedores/pedidosproveedores/view',array('id'=>$model->idpedidosproveedores)));
        ?>
        </h3></b>
	        
        <b><?php echo CHtml::encode($model->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($model->estado); ?>
        <?php echo $separador; ?>
        
        <b><?php echo CHtml::encode($model->getAttributeLabel('tipopedidosproveedores_idtipopedidosproveedores')); ?>:</b>
	<?php echo CHtml::encode( (isset($model->tipopedidosproveedoresIdtipopedidosproveedores->nombre))?$model->tipopedidosproveedoresIdtipopedidosproveedores->nombre : 0); ?>
        <?php echo $separador; ?>
        <br>
        
        
        
	<b><?php echo CHtml::encode($model->getAttributeLabel('usuariocreacion')); ?>:</b>
	<?php 
                if(isset($model->usuariocreacion0->username)){
                    echo CHtml::encode($model->usuariocreacion0->username);
                }
        ?>
	<?php echo $separador; ?>

	<b><?php echo CHtml::encode($model->getAttributeLabel('usuarioaprobacion')); ?>:</b>
	<?php 
            if(isset($model->usuarioaprobacion0->username)){
                echo CHtml::encode($model->usuarioaprobacion0->username); 
            }
         ?>
        
        
        <br />
        
	<b><?php echo CHtml::encode($model->getAttributeLabel('idproveedor')); ?>:</b>
	<?php echo CHtml::encode($model->idproveedor0->nombre); ?>
	<?php echo $separador; ?>

	<b><?php echo CHtml::encode($model->getAttributeLabel('moneda_idmoneda')); ?>:</b>
	<?php echo CHtml::encode($model->monedaIdmoneda->nombre); ?>
	<?php echo $separador; ?>
        
        <b><?php echo "Transporte: "; ?></b>
	<?php 
                if(isset($model->tipostransporteIdtipostransporte->nombre)){
                    echo CHtml::encode($model->tipostransporteIdtipostransporte->nombre);
                }
        ?>
        <br />
	

	<b><?php echo CHtml::encode($model->getAttributeLabel('fechacreacion')); ?>:</b>
	<?php echo CHtml::encode($model->fechacreacion); ?>
	<?php echo $separador; ?>

	<b><?php echo CHtml::encode($model->getAttributeLabel('fechacierre')); ?>:</b>
	<?php echo CHtml::encode($model->fechacierre); ?>
	<?php echo $separador; ?>
        
        <b><?php echo CHtml::encode($model->getAttributeLabel('fechaaprobacion')); ?>:</b>
	<?php echo CHtml::encode($model->fechaaprobacion); ?>
	<?php echo $separador; ?>

        
	<br />
        
        
        
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
                    
                    
                    
                    <?php 
                    
                   
                    
                    switch($model->estado){
                               case 'activo':{
                                   //AGREGAR NUEVO ITEM
                                   echo "<td>";
                                   echo "<div class='boton'>";
                                   echo CHtml::link("Agregar nuevo item",Yii::app()->createUrl($this->module->id."/pedidosproveedoresitems/create", array("pedidosproveedores_idpedidosproveedores"=>$model->idpedidosproveedores)));
                                   echo "</div>";
                                   echo "</td>";
                                   
                                   //VER GRILLA DE CLASIFICACION
                                    
                                   
                                   //CAMBIAR ESTADO
                                   echo "<td>";
                                   echo "<div class='boton'>";
                                   echo CHtml::link("Cambiar estado",Yii::app()->createUrl($this->module->id."/pedidosproveedores/changestate", array("id"=>$model->idpedidosproveedores)));
                                   echo "</div>";
                                   echo "</td>";
                                   
                                   ///HACER CARGA MASIVA DESDE EXCELL
                                   echo "<td>";
                                   echo "<div class='boton'>";
                                   echo CHtml::link("Carga desde EXCEL",Yii::app()->createUrl("PedidosProveedores/cargasexcel/create/id/".$model->idpedidosproveedores));
                                   echo "</div>";
                                   echo "</td>";
                                   
                                    echo "</tr><tr>";
                                    echo "<td colspan=4>";
                                    echo "<div class='boton'>";
                                    echo CHtml::link("VER GRILLA",Yii::app()->createUrl($this->module->id."/pedidosproveedores/view", array("id"=>$model->idpedidosproveedores)));
                                    echo "</div>";
                                    echo "</td>";
                                   
                                   break;
                               }
                               
                               case 'aprobado':{
                                   echo "<td>";
                                   echo "<div class='boton'>";
                                   echo CHtml::link("Generar Impresion de Orden",Yii::app()->createUrl($this->module->id."/pedidosproveedores/printorder", array("id"=>$model->idpedidosproveedores)));
                                   echo "</div>";
                                   echo "</td>";
                                    //CAMBIAR ESTADO
                                   echo "<td>";
                                   echo "<div class='boton'>";
                                   echo CHtml::link("Cambiar estado",Yii::app()->createUrl($this->module->id."/pedidosproveedores/changestate", array("id"=>$model->idpedidosproveedores)));
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
                                        $html = $this->renderPartial('view',array('model'=>$model,'pedidosproveedoresdocumentos'=>$pedidosproveedoresdocumentos,'mail'=>false),true);
                                        Yii::app()->mailer->AddAddress($model->idproveedor0->email);
                                        Yii::app()->mailer->AddAddress("oborja@siglodelhombre.com");
                                        Yii::app()->mailer->Subject = "Pedido a proveedores # ".$model->idpedidosproveedores;
                                        Yii::app()->mailer->MsgHTML($html);
                                        Yii::app()->mailer->Send();
                                        echo "<b>Pedido a proveedor enviado al correo: </b>".$model->idproveedor0->email;
                                    }else{
                                        echo "<div style='float:right; margin: 0 10px 0 10px;'>";
                                        echo CHtml::link("<img src='".Yii::app()->createUrl('images/basic/email-out.png')."'>",Yii::app()->createUrl($this->module->id."/pedidosproveedores/view", array("id"=>$model->idpedidosproveedores,'mail'=>true)));
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
                           
                          
                           
                           
                           //echo CHtml::link("Ver opciones ", array('view', 'id'=>$model->idpedidosproveedores)); ?></td>
                </tr>
            </table>
        
        </div>
        
	
        
        
         <?php
         
/*
            $Provider = new CActiveDataProvider('ViewPedidosproveedoresitemsagrupado', array('criteria'=>array('condition'=>'pedidosproveedores_idpedidosproveedores='.$model->idpedidosproveedores)));
            
            switch($model->estado){
                case 'activo':{
                    $accion = array('class' => 'CLinkColumn',
                                    'header'=>'Accion',
                                    'label'=>'Reservar',
                                    'urlExpression'=>'Yii::app()->createUrl("/PedidosProveedores/pedidosproveedoresitemdetallereserva/getreservas/id/".$model->idpedidosproveedoresitems)',
                              );
                    break;
                }

                case 'impreso':{
                    $accion = array('class' => 'CLinkColumn',
                                    'header'=>'Accion',
                                    'label'=>'confirmar',
                                    'urlExpression'=>'Yii::app()->createUrl("/PedidosProveedores/pedidosproveedoresitems/confirmados/id/".$model->idpedidosproveedoresitems)',
                              );
                    break;
                }
                
                default: {
                    $accion=array('name'=>'',
                            'value'=>'',
                        );
                }
            }
            
            
            if($model->estado=='activo'){
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
                        'urlExpression'=>'Yii::app()->createUrl("/PedidosProveedores/pedidosproveedoresitemdetallereserva/getreservas/id/".$model->idpedidosproveedoresitems)',
                  ),
                  array('class' => 'CButtonColumn',
                        'header'=>'Opciones',
                        'template'=>'{update}{delete}',
                        'buttons'=>array(
                                            'update'=>array('url'=>'Yii::app()->createUrl("/PedidosProveedores/pedidosproveedoresitems/update", array("id"=>$model->idpedidosproveedoresitems))'),
                                            'delete'=>array('url'=>'Yii::app()->createUrl("/PedidosProveedores/pedidosproveedoresitems/delete", array("id"=>$model->idpedidosproveedoresitems))'),
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

*/
         
         
        ?>
        
	<?php /*
	<b><?php echo CHtml::encode($model->getAttributeLabel('fechaestimada')); ?>:</b>
	<?php echo CHtml::encode($model->fechaestimada); ?>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('fechaaprobacion')); ?>:</b>
	<?php echo CHtml::encode($model->fechaaprobacion); ?>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('fechaentrada')); ?>:</b>
	<?php echo CHtml::encode($model->fechaentrada); ?>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('fechaliberacion')); ?>:</b>
	<?php echo CHtml::encode($model->fechaliberacion); ?>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($model->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('observaciones')); ?>:</b>
	<?php echo CHtml::encode($model->observaciones); ?>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($model->estado); ?>
	<br />

	*/ ?>
        
        
        


</div>