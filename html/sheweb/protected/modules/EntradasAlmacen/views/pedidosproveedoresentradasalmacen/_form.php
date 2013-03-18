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
                    echo $form->dropDownList($model,'bodega_idbodega',$select,array('id'=>'bodega_idbodega'));
             ?>
		<?php echo $form->error($model,'bodega_idbodega'); ?>
	</div>

        <hr class="separador_blanco">
        

	<div class="row">
		<?php echo $form->hiddenField($model,'pedidosproveedores_idpedidosproveedores',array('value'=>$idpedidosproveedores)); ?>
		<?php echo $form->error($model,'pedidosproveedores_idpedidosproveedores'); ?>
	</div>
        <div id='capabloqueo'></div>
        <div id="cargarapida"><div id='headcargarapida' >
                <div  id='guardarcargarapida' class='boton' alt='true'><a href="#">Guardar</a></div>
                <div  id='inactivacargarapida' class='boton' alt='true'><a href="#">Cerrar</a></div>
                <div  id='resetcargarapida' class='boton' alt='true'><a href="#">Reset</a></div>
                 </div><div id='bodycargarapida' style='float:left;width:100%'></div></div>
        <div  id='activacargarapida' class='boton'><a href="#">Carga Rapida FIRMES</a></div>
        <div  id='activacargarapida2' class='boton'><a href="#">Carga Rapida CONSIGNACIONES</a></div>
        <hr class="separador_blanco">
        
        <div class="grid-view" >
            <table class="items">
                <thead>
                    <tr>
                        <th>barcode</th>
                        <th>Item</th>
                        <th>Tipo</th>
                        <th>Solicitado</th>
                        <th>Confirmado</th>
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
                    echo"<td>".$row['barcode'].
                            "<input type='hidden' id='B_".$row['barcode']."_".$row['condicioncomercial']."' value='".$i."' alt='".$row['item_iditem']."'></input>".
                            "</td>";
                    echo"<td>".
                            "<div id='nombre_".$i."' alt='".$row['nombre']."'>".$row['nombre']."</div>".
                            "<input type='hidden' name='idpedidosproveedoresitems_".$i."' value='".$row['idpedidosproveedoresitems']."' >".
                            "<input type='hidden' name='iditem_".$i."' value='".$row['item_iditem']."' >".
                         "</td>";
                    echo"<td>".$row['condicioncomercial']."<input type='hidden' size='4' name='idcondicioncomercial_".$i."' value='".$row['idcondicioncomercial']."'></input></td>";
                    echo"<td> <div id='solicitado_".$i."' alt='".$row['solicitado']."'>".$row['solicitado']."</div></td>";
                    echo"<td><div id='confirmado_".$i."' alt='".$row['confirmado']."'>".$row['confirmado']." </div></td>";
                    echo"<td> <div id='recibido_".$i."' alt='".$row['recibido']."'>".$row['recibido']."</div></td>";
                    echo"<td><input type='text' size='4' name='recibir_".$i."' id='recibir_".$i."' ></input></td>";
                    echo"<td><input type='text' size='4' name='fallado_".$i."' id='fallado_".$i."'></input></td>";
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

</div>

<?php

    $cs = Yii::app()->clientScript;
    $cs->registerCoreScript('jquery');
?>
<script type="text/javascript">
     
        
     
     jQuery(document).ready(function(){
         
         ///FUNCION QUE ACTIVA LA VENTANA EMERGENTE
         var activarventana = function($condicioncomercial){
                 
                 $('#bodycargarapida').empty();
                
                 $('<input type="hidden" id="condicioncomercial" value="'+$condicioncomercial+'">').appendTo('#bodycargarapida');
                 
                 $('<h4>Entrada de almacen</h4><b>Condicion comercial:</b>'+$condicioncomercial+'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>Bodega:</b> '+$('#bodega_idbodega').find(":selected").text()+'</h4>').appendTo('#bodycargarapida');
                 $('<table id=\'tabla1\'>').appendTo('#bodycargarapida');
                 $('<tr id=\'tr1\'>').appendTo('#tabla1');
                 $('<th>CODIGO DE BARRAS</th>').appendTo('#tr1');
                 $('<th>Cantidad</th>').appendTo('#tr1');
                 $('<th>Cifras</th>').appendTo('#tr1');
                 $('<th>Solicitado</th>').appendTo('#tr1');
                 $('<th>Confirmado</th>').appendTo('#tr1');
                 $('<th>Recibido</th>').appendTo('#tr1');
                 $('<tr id=\'tr2\'>').appendTo('#tabla1');
                 $('<td id=\'td1\'></td>').appendTo('#tr2');//item
                 $('<td id=\'td2\'></td>').appendTo('#tr2');//cantidad
                 $('<td id=\'td3\'></td>').appendTo('#tr2');//cifras
                 $('<td id=\'td4\'></td>').appendTo('#tr2');//solicitado
                 $('<td id=\'td5\'></td>').appendTo('#tr2');//confirmado
                 $('<td id=\'td6\'></td>').appendTo('#tr2');//recibido
                 
                 $('<input type="text" id="barcode" ></input>').appendTo('#td1');
                 $('<input type="text" id="amount" ></input>').appendTo('#td2');
                 $('<input type="text" id="cifras" ></input>').appendTo('#td3');
                 $('#cifras').val(4);
                 
                 
                 
                 
                 
                 ///VENTANA DE DETALLE DE PRODUCTO CARGADO
                 
                 $('<div id=\'cargarapidadetalleitem\'></div>').appendTo('#bodycargarapida');
                 
                 ///VENTENA DE PRODUCTOS CARGADOS
                 $('<div id=\'itemscargados\'></div>').appendTo('#bodycargarapida');
                 
                 
                 $('#capabloqueo').show();
                 $('#cargarapida').show(500);
                 $('#barcode').focus();
                 
                
                 /////CONTAR CARACTERES INTRODUCIDOS EN CODIGODEBARRAS
                $("#barcode").keyup(function() {
                    
                    if($('#barcode').val().length > 20){
                        alert('esta introduciendo un codigo de barras de mas de 20 cifras.');
                        alert('el codigo de barras sera borrado');
                        $('#barcode').val('');
                    }else{
                          $('#barcode').val(parseInt($('#barcode').val()));
                           if($('#barcode').val()=='NaN'){
                               $('#barcode').val('');
                            }
                    }
                    
                    
                 });
                
                 
                 /////CONTAR CARACTERES INTRODUCIDOS EN CANTIDAD
                $("#amount").keyup(function() {
                    
                    if($('#amount').val().length > $('#cifras').val()){
                        alert('esta introduciendo una cantidad superior al numero de cifras seleccionado, por favor corrija la cantidad o cambie el valor de numero de cifras permitido');
                        alert('la cantidad introducida sera borrada');
                        $('#amount').val('');
                    }else{
                           $('#amount').val(parseInt($('#amount').val()));
                           if($('#amount').val()=='NaN'){
                               $('#amount').val('');
                           }
                    }
                    
                    
                 });
                 
                 
                 ///restringir candidad de numero de cifras
                 
                 $('#cifras').keyup(function(){
                     if(($('#cifras').val()>7)||($('#cifras').val()<1)){
                         alert('Numero de cifras debe estar en el rango de 1 al 7');
                         alert('Numero de cifras debe estar en el rango de 1 al 7');
                         $('#cifras').val('');
                         $('#cifras').focus();
                     }else{
                         $('#cifras').val(parseInt($('#cifras').val()));
                           if($('#cifras').val()=='NaN'){
                               $('#cifras').val('4');
                            }
                     }
                 });
                 
                 
                 
                
                 
                 
                 
         };
         
         
         //////////////
         
         
         
         $('#activacargarapida').bind('click',function(){
             activarventana('firme');
         });
         
         $('#activacargarapida2').bind('click',function(){
             activarventana('consignacion');
         });
          
  
          $('#inactivacargarapida').bind('click',function(){
              $('#cargarapida').hide(500);
              $('#bodycargarapida').empty();
              $('#capabloqueo').hide();
          });
          
          
         $('form').bind('submit',function(e){
              e.preventDefault();
              switch($("*:focus").attr("id")){
                  case 'barcode':{
                          if($('#barcode').val().length <1){
                                alert("No ha introducido un codigo de barras");
                               
                                 $('#barcode').focus();
                                
                                 return false;
                          }
                          
                          
                          /////INTENTA CARGAR INFORMACION DEL ITEM
                          
                          var $item_iditem =  'B_'+$('#barcode').val()+'_'+$('#condicioncomercial').val();
                          if (typeof $('#'+$item_iditem ).attr('alt') != 'undefined'){
                              
                          /////////////////CARGAR INFORMACION DEL ITEM EN VENTANA DE DETALLLE
                          
                          
                              $('#cargarapidadetalleitem').load('<?php echo  Yii::app()->baseUrl.'/PedidosProveedores/pedidosproveedores/getinfoitem/id/';?>'+$('#'+$item_iditem ).attr('alt'));
                             
                              $('#td4').html($('#solicitado_'+ $('#'+$item_iditem ).val()).attr('alt'));
                              $('#td5').html($('#confirmado_'+ $('#'+$item_iditem ).val()).attr('alt'));
                              $('#td6').html($('#recibido_'+ $('#'+$item_iditem ).val()).attr('alt'));
                              
                              $('#amount').focus();
                               
                          } else{
                              
                              alert('El codigo de barras ingresado no se encuentra en esta orden de compra en condicion comercial '+ $('#condicioncomercial').val());
                              
                          }
                          
                          
                          ////////
                          
                          break;
                  }
                  case 'amount':{
                          
                        if($('#amount').val().length <1){
                            alert("No ha introducido una cantidad");
                            $('#amount').val('');
                             $('#amount').focus();
                           
                             return false;
                        }
                          
                        if($('#amount').val() <1){
                            alert("Cantidad no puede ser menor a 1");
                            $('#amount').val('');
                             $('#amount').focus();
   
                             return false;
                        }
                        if (typeof $('#D_'+$('#barcode').val()).attr('alt') != 'undefined'){
                                                                      
                            if (confirm("El item ya existe en el listado de recepcion. desea aumentar la cantidad ?")) {
                                var $tmp =parseInt($('#cantidad_'+$('#barcode').val()).attr('alt'));
                                $tmp+= parseInt($('#amount').val());
                                $('#cantidad_'+$('#barcode').val()).attr('alt',$tmp);
                                $('#cantidad_'+$('#barcode').val()).empty();
                                $('#cantidad_'+$('#barcode').val()).html($tmp);
                            }
                            
                        } else{
                            //'+$('#barcode').val()+' -> '+$('#amount').val()+'
                            $('<div id="D_'+$('#barcode').val()+'" alt="ok" ></div>').appendTo('#itemscargados');
                           
                            $('<span><b>'+$('#barcode').val()+'</b>&nbsp;&nbsp;&nbsp;&nbsp;</span>').appendTo('#D_'+$('#barcode').val());
                            $('<span><b>'+$('#nombre_'+ $('#B_”'+$('#barcode').val()+'_'+$condicioncomercial).val()).val()+'</b>&nbsp;&nbsp;&nbsp;&nbsp;</span>').appendTo('#D_'+$('#barcode').val());
                            $('<span id="cantidad_'+$('#barcode').val()+'" alt="'+$('#amount').val()+'">'+$('#amount').val()+'</span>').appendTo('#D_'+$('#barcode').val());
                            $('&nbsp;&nbsp;&nbsp;&nbsp;<span>[X]</span>').appendTo('#D_'+$('#barcode').val());
                        }
                        
                          
                          ///PREPARAR TODO PARA NUEVA CARGA
                          $('#cargarapidadetalleitem').empty();
                          $('#td4').empty();
                          $('#td5').empty();
                          $('#td6').empty();
                          $('#amount').val('');
                          $('#cifras').val(4);                        
                          $('#barcode').val('');
                          $('#barcode').focus();
                          
                          break;
                  }
                  default:{
                          $('#barcode').focus();
                          break;
                  }
              }
            
             return false;
         })  
         
         
          //////CAPTURAR TECLA F5
                 
            $(function() {
               $(document).keydown(function(e){
                var code = (e.keyCode ? e.keyCode : e.which);
                if((code == 116)||(code == 9)||((e.ctrlKey || e.metaKey))) {
                 e.preventDefault();
                 
                }
               });
              });
                 
            /////////////////////////
   
         
         
         ////BIND RESET BUTTON
         
         $('#resetcargarapida').bind('click',function(){
             $('#amount').val('');
             $('#barcode').val('');             
             $('#cifras').val(4);                        
             $('#barcode').focus();
         });
         
        
      });
</script>