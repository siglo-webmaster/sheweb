

<?php
    $separador="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";

?>  

<div class="view" id="pedido">

        <b><h3>
        <?php
            echo "<h1>Pedido a proveedores #".$model->idpedidosproveedores."</h1>";
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

        
                    <?php 
                    
                    
                    
                    switch($model->estado){
                               case 'activo':{
                                   //AGREGAR NUEVO ITEM
                                   
                                   echo "<div class='boton'>";
                                   echo CHtml::link("Agregar nuevo item",Yii::app()->createUrl($this->module->id."/pedidosproveedoresitems/create", array("pedidosproveedores_idpedidosproveedores"=>$model->idpedidosproveedores)));
                                   echo "</div>";
                                   
                                   
                                   //CAMBIAR ESTADO
                                   
                                   echo "<div class='boton'>";
                                   echo CHtml::link("Cambiar estado",Yii::app()->createUrl($this->module->id."/pedidosproveedores/changestate", array("id"=>$model->idpedidosproveedores)));
                                   echo "</div>";
                                   
                                   
                                   ///HACER CARGA MASIVA DESDE EXCELL
                                  
                                   echo "<div class='boton'>";
                                   echo CHtml::link("Carga desde EXCEL",Yii::app()->createUrl("PedidosProveedores/cargasexcel/create/id/".$model->idpedidosproveedores));
                                   echo "</div>";
                                  
                                   
                                                                       echo "</tr><tr>";
                                    echo "<div class='boton'>";
                                    echo CHtml::link("OCULTAR GRILLA",Yii::app()->createUrl($this->module->id."/pedidosproveedores/view", array("id"=>$model->idpedidosproveedores)));
                                    echo "</div>";
                              
                                   
                                   break;

                               
                               }
                               
                               case 'aprobado':{

                                   echo "<div class='boton'>";
                                   echo CHtml::link("Generar Impresion de Orden",Yii::app()->createUrl($this->module->id."/pedidosproveedores/printorder", array("id"=>$model->idpedidosproveedores)));
                                   echo "</div>";

                                    //CAMBIAR ESTADO

                                   echo "<div class='boton'>";
                                   echo CHtml::link("Cambiar estado",Yii::app()->createUrl($this->module->id."/pedidosproveedores/changestate", array("id"=>$model->idpedidosproveedores)));
                                   echo "</div>";

                                   break;
                               }
                               
                               case 'impreso':{

                                 
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

                                   break;
                               }
                           }
                           
                   ?>
 
            <hr class='separador_blanco'>
	
<?php  
    

        $headers = array(
                    array('name'=>'idpedidosproveedoresitems',//id del campo
                          'label'=>'ppi',//etiqueta a mostrar
                          'hidden'=>'false',
                          'width'=>'30',
                          ),
                     array('name'=>'iditem',//id del campo
                          'label'=>'iditem',//etiqueta a mostrar
                          'hidden'=>'false',
                          'width'=>'40',
                          ),
                      array('name'=>'titulo',
                          'width'=>'310',
                          'label'=>'titulo',
                          'sortable'=>'true',
                          ),
                      array('name'=>'condicioncomercial',
                          'width'=>'80',
                          'label'=>'condicion',
                          'sortable'=>'true',
                          ),
                      array('name'=>'editorial',
                          'width'=>'90',
                          'label'=>'editorial',
                          'sortable'=>'true',
                          ),
                    array('name'=>'categoria',
                                  'width'=>'80',
                                  'label'=>'categoria',
                                   'editor'=>'true',
                                   'type'=>'combobox',
                                   'values'=>array('url'=>Yii::app()->baseUrl.'/PedidosProveedores/pedidosproveedores/getcategoria',
                                                    'valueField'=>'nombre',
                                                    'textField'=>'nombre',
                                                ),
                         ),
                      array('name'=>'idestrellas',
                                  'width'=>'50',
                                  'label'=>'estrellas',
                                   'editor'=>'true',
                                   'type'=>'combobox',
                                   'values'=>array('url'=>Yii::app()->baseUrl.'/PedidosProveedores/pedidosproveedores/getestrellas',
                                                    'valueField'=>'idestrellas',
                                                    'textField'=>'idestrellas',
                                                ),
                         ),
                    );
        
        
        $this->widget('ext.tablaeasyUi.easyUi',
                array(
                 'id'       =>'dg'.$model->idpedidosproveedores, ///id unico de la tabla
                 'width'    =>'700', //ancho
                 'height'   =>'300', //alto
                 'pk'       =>'idpedidosproveedoresitems', //primary key for eddit
                 'title'    =>'Items del pedido # '.$model->idpedidosproveedores, //titulo
                 'headers'  =>$headers, //array de cabeceras
                 'menubutton'=>array(array('onclick'=>'saveChanges','label'=>'Guardar cambios')),
                 'dialoginfo'=>Yii::app()->baseUrl.'/PedidosProveedores/pedidosproveedores/getinfoitem/',
                 'action'   =>Yii::app()->baseUrl.'/PedidosProveedores/pedidosproveedores/getpedidoproveedoresitems/id/'.$model->idpedidosproveedores, //url de los datos
                 'saveurl'  =>Yii::app()->baseUrl.'/PedidosProveedores/pedidosproveedores/savechangesestrellas/',
                    )
                );
        
  



?>


 
</div>
