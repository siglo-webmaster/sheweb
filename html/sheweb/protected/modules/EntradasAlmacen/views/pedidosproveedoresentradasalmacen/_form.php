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
		<?php echo $form->hiddenField($model,'pedidosproveedores_idpedidosproveedores',array('value'=>$idpedidosproveedores,'id'=>'pedidosproveedores_idpedidosproveedores')); ?>
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
         var $idtempentradaalamacen;
         var $idtemp_entradasalamacendetalle='false'; 
         ///FUNCION QUE ACTIVA LA VENTANA EMERGENTE
         var activarventana = function($condicioncomercial){
               
                 ///LLAMADO A LA BASE DE DATOS PARA GENERAR UNA NUEVA ENTRADA DE ALMACEN TEMPORAL
                 
                 
                 $('#bodycargarapida').empty();
                 $.post("<?php echo Yii::app()->createUrl($this->module->id."/pedidosproveedoresentradasalmacen/crearentradatemporal"); ?>", { bodega_idbodega: $('#bodega_idbodega').val(), pedidosproveedores_idpedidosproveedores: $('#pedidosproveedores_idpedidosproveedores').val()})
                        .done(function(data) {
                         $idtempentradaalamacen = data;
                  });
                  //// FIN LLAMADO A BASE DE DATOS PARA CREAR ENTRADA DE ALMACEN TEMPORAL
                
                 $('<input type="hidden" id="condicioncomercial" value="'+$condicioncomercial+'">').appendTo('#bodycargarapida');
                 
                 $('<h4>Entrada de almacen</h4><b>Condicion comercial:</b>'+$condicioncomercial+'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>Bodega:</b> '+$('#bodega_idbodega').find(":selected").text()+'</h4>').appendTo('#bodycargarapida');
                 
                 $('<div id="floatleftbox" ></div>').appendTo('#bodycargarapida');
                 $('<div><b>Cifras:&nbsp;&nbsp;&nbsp;&nbsp;</b></div>').appendTo('#floatleftbox');
                 $('<input type="text" id="cifras" size=3 alt="cifras"></input>').appendTo('#floatleftbox');
                 $('<table id=\'tabla1\'>').appendTo('#bodycargarapida');
                 $('<tr id=\'tr1\'>').appendTo('#tabla1');
                 $('<th>Barcode</th>').appendTo('#tr1');
                 $('<th>Buenos</th>').appendTo('#tr1');
                
                 $('<th>Fallados</th>').appendTo('#tr1');
                 $('<th>Observaciones</th>').appendTo('#tr1');
                 $('<th>Solicitado</th>').appendTo('#tr1');
                 $('<th>Confirmado</th>').appendTo('#tr1');
                 $('<th>Recibido</th>').appendTo('#tr1');
                 $('<tr id=\'tr2\'>').appendTo('#tabla1');
                 $('<td id=\'td1\'></td>').appendTo('#tr2');//item
                 $('<td id=\'td2\'></td>').appendTo('#tr2');//cantidad
                 
                 $('<td id=\'td41\'></td>').appendTo('#tr2');//fallado
                 $('<td id=\'td42\'></td>').appendTo('#tr2');//observaciones
                 $('<td id=\'td43\'></td>').appendTo('#tr2');//cifras
                 $('<td id=\'td4\'></td>').appendTo('#tr2');//solicitado
                 $('<td id=\'td5\'></td>').appendTo('#tr2');//confirmado
                 $('<td id=\'td6\'></td>').appendTo('#tr2');//recibido
                 
                 $('<input type="text" id="barcode" size=10 ></input>').appendTo('#td1');
                 $('<input type="text" id="amount" size=3></input>').appendTo('#td2');
                
                 $('<input type="text" id="fallados" size=2 ></input>').appendTo('#td41');
                 $('<input type="text" id="observaciones" size=30></input>').appendTo('#td42');
                 
                 
                 $('#cifras').val(4);
                 
                 
                 
                 
                 ///VENTANA DE DETALLE DE PRODUCTO CARGADO
                 
                 $('<div id=\'cargarapidadetalleitem\'></div>').appendTo('#bodycargarapida');
                 
                 ///VENTENA DE PRODUCTOS CARGADOS
                 $('<div id=\'itemscargados\'></div>').appendTo('#bodycargarapida');
                 
                 $('<table id="tcr"></table>').appendTo('#itemscargados');
                 $('<thead id="thtcr"></thead>').appendTo('#tcr');
                 $('<tr id="htcr"></tr>').appendTo('#thtcr');
                 $('<th>barcode</th>').appendTo('#htcr');
                 $('<th>titulo</th>').appendTo('#htcr');
                 $('<th>cantidad</th>').appendTo('#htcr');
                 $('<th>fallados</th>').appendTo('#htcr');
                 $('<th>borrar</th>').appendTo('#htcr');
                 
                 $('<tbody id="tbtcr"></tbody>').appendTo('#tcr');
                 
                 
                 
                 ///VENTANA DE ALTERNATIVA DE PRODUCTO
                 
                 $('<div id=\'opcionesalternativas\'></div>').appendTo('#bodycargarapida');
                 $("<div  id='cuerpoopcionesalternativas' alt='true'></div>").appendTo('#opcionesalternativas');
                  $("<input type='hidden'  id='contadoralternativas' value='0'></input>").appendTo('#opcionesalternativas');
                 
                 
                 $("<div  id='botonera2' alt='true'></div>").appendTo('#opcionesalternativas');
                 $("<div  id='crearclonar' alt='true'><a href='#'>Buscar /  Crear / Clonar</a></div>").appendTo('#botonera2');
                 $('#crearclonar').addClass('boton');
                 
                  
                  $("<div  id='guardarclonar' alt='true'><a href='#'>Crear y Guardar</a></div>").appendTo('#botonera2');
                  $('#guardarclonar').addClass('boton').hide();
                  
                  $("<div  id='cancelarclonar' alt='true'><a href='#'>Cancelar</a></div>").appendTo('#botonera2');
                  $('#cancelarclonar').addClass('boton').hide();
                  
                  
                  
                 
                 $('#crearclonar').bind('click', function(){
                        
                        $('#crearclonar').hide();
                        $('#guardarclonar').show();
                        $('#cancelarclonar').show();
                        $('#cuerpoopcionesalternativas').empty();//Borrar ventana de opciones alternativas
                        
                        $('<table id=\'tabla2\'>').appendTo('#cuerpoopcionesalternativas');
                        $('<tr id=\'t2tr1\'>').appendTo('#tabla2');
                        $('<th>Barcode</th>').appendTo('#t2tr1');
                        $('<th>isbn</th>').appendTo('#t2tr1');
                        $('<th>Titulo</th>').appendTo('#t2tr1');
                        $('<th>Editorial</th>').appendTo('#t2tr1');
                        $('<th>A&ntilde;o</th>').appendTo('#t2tr1');
                        $('<th>Edici&oacute;n</th>').appendTo('#t2tr1');
                        $('<th>Formato</th>').appendTo('#t2tr1');
                        $('<th>Cantidad</th>').appendTo('#t2tr1');
                        $('<tr id=\'t2tr2\'>').appendTo('#tabla2');
                        $('<td id=\'t2td1\'></td>').appendTo('#t2tr2');//barcode
                        $('<td id=\'t2td21\'></td>').appendTo('#t2tr2');//titulo
                        $('<td id=\'t2td2\'></td>').appendTo('#t2tr2');//titulo
                        $('<td id=\'t2td3\'></td>').appendTo('#t2tr2');//editorial
                        $('<td id=\'t2td4\'></td>').appendTo('#t2tr2');//año
                        $('<td id=\'t2td5\'></td>').appendTo('#t2tr2');//edicion
                        $('<td id=\'t2td6\'></td>').appendTo('#t2tr2');//formato
                        $('<td id=\'t2td7\'></td>').appendTo('#t2tr2');//cantidad
                        $('<tr id=\'t2tr3\'>').appendTo('#tabla2');
                        $('<td id=\'t2td31\' colspan="4"><b>Autor:</b>&nbsp;&nbsp;&nbsp;&nbsp;</td>').appendTo('#t2tr3');//Autor
                        $('<input type="text" id="aautor" size="60" ></input>').appendTo('#t2td31');
                        
                        $('<td id=\'t2td32\' ><b>Fallados:</b></td>').appendTo('#t2tr3');//fallados
                        $('<input type=text id="afallados" size=3></input>').appendTo('#t2td32');
                        $('<td id=\'t2td33\' colspan="3"><b>Observaci&oacute;n:</b></td>').appendTo('#t2tr3');//Observaciones
                        $('<input type=text id="aobservacion" size="27" ></input>').appendTo('#t2td33');
                        
                        
                        
                         $('<input type="text" id="abarcode"  size=4 ></input>').appendTo('#t2td1');
                         $('<input type="text" id="aisbn" size=4 ></input>').appendTo('#t2td21');
                         $('<input type="text" id="atitulo" size=10 ></input>').appendTo('#t2td2');
                         
                         ////SELECT DE EDITORIALES
                         $('<select id="aeditorial" ></select>').appendTo('#t2td3');
                         
                          <?php
                            $select=null;
                            $select = CHtml::listData(Editorial::model()->findAll(), 'ideditorial', 'nombre');
                            foreach ($select as $key=>$value){
                                echo "$('#aeditorial').append($(\"<option></option>\").attr(\"value\",\"".$key.".".$value."\").text(\"".$key.".".$value."\"));";
                            }
                            ?>
                         
                         ///FIN SELECT DE EDITORIALES
                         ///SELECT AÑO
                         $('<select id="ayear" ></select>').appendTo('#t2td4');
                          <?php
                            $select=null;
                            for($i=(date('Y'));$i>=2000;$i--){
                                $select[]=$i;
                            }
                            foreach ($select as $value){
                                echo "$('#ayear').append($(\"<option></option>\").attr(\"value\",\"".$value."\").text(\"".$value."\"));";
                            }
                            ?>
                         
                         ///FIN SELECT AÑO
                         ////SELECT NUMERO EDICION
                         $('<select id="aedicion" ></input>').appendTo('#t2td5');
                         <?php
                            $select=null;
                            for($i=1;$i<=99;$i++){
                                $select[]=$i;
                            }
                            foreach ($select as $value){
                                echo "$('#aedicion').append($(\"<option></option>\").attr(\"value\",\"".$value."\").text(\"".$value."\"));";
                            }
                            ?>
                         //////FIN SELECT NUMERO EDICION
                         
                         //////SELECT FORMATO
                         $('<select id="aformato" ></select>').appendTo('#t2td6');
                          <?php
                            $select=null;
                            $select = CHtml::listData(Tipoformato::model()->findAll(), 'idtipoformato', 'nombre');
                            foreach ($select as $key=>$value){
                                echo "$('#aformato').append($(\"<option></option>\").attr(\"value\",\"".$key.".".$value."\").text(\"".$key.".".$value."\"));";
                            }
                            ?>
                         //FIN SELECT FORMATO
                         
                         $('<input type="text" id="acantidad" size=4></input>').appendTo('#t2td7');
                         
                     
                 });
                 
                  $('#cancelarclonar').bind('click', function(){
                             $('#cuerpoopcionesalternativas').empty();
                             $('#cancelarclonar').hide();
                             $('#guardarclonar').hide();
                             $('#crearclonar').show();
                  });
                 
                 $('#guardarclonar').bind('click',function(){
                     agregarItemAlternativoaListado(); 
                 });
                 
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
                 
                 
                  /////CONTAR CARACTERES INTRODUCIDOS EN FALLADOS
                $("#fallados").keyup(function() {
                    
                    if($('#fallados').val().length > $('#cifras').val()){
                        alert('esta introduciendo una cantidad superior al numero de cifras seleccionado, por favor corrija la cantidad o cambie el valor de numero de cifras permitido');
                        alert('la cantidad introducida sera borrada');
                        $('#fallados').val('');
                    }else{
                           $('#fallados').val(parseInt($('#fallados').val()));
                           if($('#fallados').val()=='NaN'){
                               $('#fallados').val('');
                           }
                    }
                    
                    
                 })
                 
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
         
         
         //////////////INICIO AGREGAR ITEM LISTADO
         var agregarItemaListado = function(){
                    
                    //////INTENTAMOS GUARDAR EL ITEM A INTRODUCIR EN EL LISTADO /////
                    //alert($('#B_'+$('#barcode').val()+'_'+$('#condicioncomercial').val()).attr('alt'));
                    var filaitem = $('#B_'+$('#barcode').val()+'_'+$('#condicioncomercial').val()).val();
                    if($('#fallados').val().length <1){
                        $('#fallados').val(0);
                    }
                    if($('#amount').val().length <1){
                        $('#amount').val(0);
                    }
                    if(($('#amount').val()==0)&&($('#fallados').val()==0)){
                        alert('No ha introducido una cantidad de libros a recibir');
                        return 0;
                    }
                    
                    if($('#barcode').val().length <1){
                        alert('el codigo de barras no puede estar en blanco');
                        $('#barcode').focus();
                        return 0;
                    }
                    
                    $.post("<?php echo Yii::app()->createUrl($this->module->id."/pedidosproveedoresentradasalmacen/crearentradaitemtemporal"); ?>", {idtempentradaalamacen: $idtempentradaalamacen,pedidosproveedoresitems_idpedidosproveedoresitems:$('#B_'+$('#barcode').val()+'_'+$('#condicioncomercial').val()).attr('alt'), amount:$('#amount').val(),fallados:$('#fallados').val(), observaciones:$('#observaciones').val()},
                        function(data) {
     
                        switch(data){
                            case 'el item ya existe':{
                                    //preguntar si quiere adicionar la cantidad
                                    
                                     if (confirm("El item ya existe en el listado de recepcion. desea aumentar la cantidad ?")) {
                                          $.post("<?php echo Yii::app()->createUrl($this->module->id."/pedidosproveedoresentradasalmacen/crearentradaitemtemporal"); ?>", {idtempentradaalamacen: $idtempentradaalamacen,pedidosproveedoresitems_idpedidosproveedoresitems:$('#B_'+$('#barcode').val()+'_'+$('#condicioncomercial').val()).attr('alt'), amount:$('#amount').val(),fallados:$('#fallados').val(), observaciones:$('#observaciones').val(), accion_item:'sumar'},
                                                function(data2) {
                                                    
                                                     var $tmp =parseInt($('#cantidad_'+data2).attr('alt'));

                                                    if($('#amount').val().length <1){
                                                        $('#amount').val(0);
                                                    }

                                                    $tmp+= parseInt($('#amount').val());
                                                    $('#cantidad_'+data2).attr('alt',$tmp);
                                                    $('#cantidad_'+data2).empty();
                                                    $('#cantidad_'+data2).html($tmp);

                                                    if($('#fallados').val().length <1){
                                                        $('#fallados').val(0);
                                                    }
                                                    var $tmp =parseInt($('#fallados_'+data2).attr('alt'));
                                                    $tmp+= parseInt($('#fallados').val());
                                                    $('#fallados_'+data2).attr('alt',$tmp);
                                                    $('#fallados_'+data2).empty();
                                                    $('#fallados_'+data2).html($tmp);
                                                    
                                                    
                                                    
                                                }
                                            );
                                      
                                    }
                                    
                                    break;
                            }
                            case 'error':{
                                    //detener la ejecucion
                                    alert('error');
                                    return (1);
                                    break;
                            }
                            default:{
                                    
                                    ///aqui creamos el nodo
                                   
                                    $("<tr id='D_"+data+"' alt='ok'></tr>").appendTo('#tbtcr');
                                    $('<td><span>'+$('#barcode').val()+'</span></td>').appendTo('#D_'+data);
                                    $('<td><span>'+$('#nombre_'+ filaitem).attr('alt') +'</span></td>').appendTo('#D_'+data);
                                    $('<td><span id="cantidad_'+data+'" alt="'+$('#amount').val()+'">'+$('#amount').val()+'</span></td>').appendTo('#D_'+data);
                                    $('<td><span id="fallados_'+data+'" alt="'+$('#fallados').val()+'">'+$('#fallados').val()+'</span></td>').appendTo('#D_'+data);
                                    $('<td><span class="boton" id="borrar_'+data+'" alt="'+data+'" ><a href="#">x</a></span></td>').appendTo('#D_'+data);

                                    $('#borrar_'+data).bind('click',function(){

                                       $('#D_'+$(this).attr('alt')).remove();
                                       $('#barcode').focus();
                                    }); 
                                    
                                    
                            }
                        }
                        
                        $('#barcode').focus();
                        $('#cargarapidadetalleitem').empty();
                        $('#td4').empty();
                        $('#td5').empty();
                        $('#td6').empty();
                        $('#amount').val('');
                        $('#cifras').val(4);                        
                        $('#barcode').val('');
                        $('#fallados').val('');
                        $('#observaciones').val('');
                         /*                       
                        if (typeof $('#D_'+$('#barcode').val()).attr('alt') != 'undefined'){
                                                                      
                                if (confirm("El item ya existe en el listado de recepcion. desea aumentar la cantidad ?")) {
                                    var $tmp =parseInt($('#cantidad_'+$('#barcode').val()).attr('alt'));

                                    if($('#amount').val().length <1){
                                        $('#amount').val(0);
                                    }

                                    $tmp+= parseInt($('#amount').val());
                                    $('#cantidad_'+$('#barcode').val()).attr('alt',$tmp);
                                    $('#cantidad_'+$('#barcode').val()).empty();
                                    $('#cantidad_'+$('#barcode').val()).html($tmp);

                                    if($('#fallados').val().length <1){
                                        $('#fallados').val(0);
                                    }
                                    var $tmp =parseInt($('#fallados_'+$('#barcode').val()).attr('alt'));
                                    $tmp+= parseInt($('#fallados').val());
                                    $('#fallados_'+$('#barcode').val()).attr('alt',$tmp);
                                    $('#fallados_'+$('#barcode').val()).empty();
                                    $('#fallados_'+$('#barcode').val()).html($tmp);
                                }

                            } else{
                                if($('#fallados').val().length <1){
                                    $('#fallados').val(0);
                                }
                                if($('#amount').val().length <1){
                                    $('#amount').val(0);
                                }
                                $("<tr id='D_"+$('#barcode').val()+"' alt='ok'></tr>").appendTo('#tbtcr');
                                $('<td><span>'+$('#barcode').val()+'</span></td>').appendTo('#D_'+$('#barcode').val());
                                $('<td><span>'+$('#nombre_'+ $('#B_'+$('#barcode').val()+'_'+$('#condicioncomercial').val()).val()).attr('alt')+'</span></td>').appendTo('#D_'+$('#barcode').val());
                                $('<td><span id="cantidad_'+$('#barcode').val()+'" alt="'+$('#amount').val()+'">'+$('#amount').val()+'</span></td>').appendTo('#D_'+$('#barcode').val());
                                $('<td><span id="fallados_'+$('#barcode').val()+'" alt="'+$('#fallados').val()+'">'+$('#fallados').val()+'</span></td>').appendTo('#D_'+$('#barcode').val());
                                $('<td><span class="boton" id="borrar_'+$('#barcode').val()+'" alt="'+$('#barcode').val()+'" ><a href="#">x</a></span></td>').appendTo('#D_'+$('#barcode').val());

                                $('#borrar_'+$('#barcode').val()).bind('click',function(){

                                   $('#D_'+$(this).attr('alt')).remove();
                                   $('#barcode').focus();
                                });                             
                            }
                        
                        */
                        
                        
                        
                        
                        //////FIN REQUWEST
                    });
                    
                    
                    
             
         }
         
         //////////////////////FIN AGREGAR ITEM LISTADO ////////
         
         
         //////AGREGAR NUEVO ITEM PROVENIENTE DE FUNCION ALTERNATIVA A LISTADO///////////////
         
          var agregarItemAlternativoaListado = function(){
             //////INTENTAMOS GUARDAR EL ITEM A INTRODUCIR EN EL LISTADO /////
                    
                    if($('#abarcode').val().length <1){
                        alert('El codigo de barras no puede estar vacio');
                        return 0;
                    }
                    
                    if($('#aisbn').val().length <1){
                        alert('El isbn no puede estar vacio');
                        return 0;
                    }
                    
                    if($('#atitulo').val().length <1){
                        alert('El titulo no puede estar vacio');
                        return 0;
                    }
                    
                    if($('#aautor').val().length <1){
                        alert('El autor no puede estar vacio');
                        return 0;
                    }
                    
                    
                    if($('#afallados').val().length <1){
                        $('#afallados').val(0);
                    }
                    
                    if($('#acantidad').val().length <1){
                        $('#acantidad').val(0);
                    }
                    
                    if(($('#acantidad').val()==0)&&($('#afallados').val()==0)){
                        alert('No ha introducido una cantidad de libros a recibir');
                        return 0;
                    }
                    
                    
                     $.post("<?php echo Yii::app()->createUrl($this->module->id."/pedidosproveedoresentradasalmacen/crearentradaitemtemporal"); ?>", {idtempentradaalamacen: $idtempentradaalamacen,pedidosproveedoresitems_idpedidosproveedoresitems:$('#B_'+$('#barcode').val()+'_'+$('#condicioncomercial').val()).attr('alt'), amount:$('#amount').val(),fallados:$('#fallados').val(), observaciones:$('#observaciones').val()},
                        function(data) {
                    

                            var data = $('#contadoralternativas').val();  

                              ///aqui creamos el nodo

                               $("<tr id='OP_"+data+"' alt='ok'></tr>").appendTo('#tbtcr');
                               $('<td><span>'+$('#abarcode').val()+'</span></td>').appendTo('#OP_'+data);
                               $('<td><span>'+$('#atitulo').val() +'</span></td>').appendTo('#OP_'+data);
                               $('<td><span id="acantidad_'+data+'" alt="'+$('#acantidad').val()+'">'+$('#acantidad').val()+'</span></td>').appendTo('#OP_'+data);
                               $('<td><span id="afallados_'+data+'" alt="'+$('#afallados').val()+'">'+$('#afallados').val()+'</span></td>').appendTo('#OP_'+data);
                               $('<input type="hidden" id="nuevoitembarcode_'+data+'" value="'+$('#abarcode').val()+'" >').appendTo('#OP_'+data);
                               $('<input type="hidden" id="nuevoitemisbn_'+data+'" value="'+$('#aisbn').val()+'" >').appendTo('#OP_'+data);
                               $('<input type="hidden" id="nuevoitemtitulo_'+data+'" value="'+$('#atitulo').val()+'" >').appendTo('#OP_'+data);
                               $('<input type="hidden" id="nuevoitemeditorial_'+data+'" value="'+$('#aeditorial').val()+'" >').appendTo('#OP_'+data);
                               $('<input type="hidden" id="nuevoitemyear_'+data+'" value="'+$('#ayear').val()+'" >').appendTo('#OP_'+data);
                               $('<input type="hidden" id="nuevoitemedicion_'+data+'" value="'+$('#aedicion').val()+'" >').appendTo('#OP_'+data);
                               $('<input type="hidden" id="nuevoitemformato_'+data+'" value="'+$('#aformato').val()+'" >').appendTo('#OP_'+data);
                               $('<input type="hidden" id="nuevoitemcantidad_'+data+'" value="'+$('#acantidad').val()+'" >').appendTo('#OP_'+data);
                               $('<input type="hidden" id="nuevoitemautor_'+data+'" value="'+$('#aautor').val()+'" >').appendTo('#OP_'+data);
                               $('<input type="hidden" id="nuevoitemfallados_'+data+'" value="'+$('#afallados').val()+'" >').appendTo('#OP_'+data);
                               $('<input type="hidden" id="nuevoitemobservacion_'+data+'" value="'+$('#aobservacion').val()+'" >').appendTo('#OP_'+data);

                               $('<td><span class="boton" id="aborrar_'+data+'" alt="'+data+'" ><a href="#">x</a></span></td>').appendTo('#OP_'+data);

                               $('#aborrar_'+data).bind('click',function(){

                                  $('#OP_'+$(this).attr('alt')).remove();
                                  $('#barcode').focus();
                               }); 


                               $('#OP_'+data).css('color','#999');

                               data++;

                               $('#contadoralternativas').val(data);

                               $('#cuerpoopcionesalternativas').empty();
                               $('#cancelarclonar').hide();
                               $('#guardarclonar').hide();
                               $('#crearclonar').show();

                               $('#barcode').focus();
                               $('#cargarapidadetalleitem').empty();
                               $('#td4').empty();
                               $('#td5').empty();
                               $('#td6').empty();
                               $('#amount').val('');
                               $('#cifras').val(4);                        
                               $('#barcode').val('');
                               $('#fallados').val('');
                               $('#observaciones').val('');
                        
                     });
                        
          }
         
         
         //////AGREGAR NUEVO ITEM PROVENIENTE DE FUNCION ALTERNATIVA A LISTADO///////////////
         
         
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
                          
                        
                        
                        $('#fallados').val('');
                        $('#fallados').focus();
                          
                          
                          break;
                  }
                  
                  case 'fallados':{
                        if(($('#amount').val().length <1)&&($('#fallados').val().length <1)){
                            alert("No ha introducido una cantidad en buenos o en fallados");
                            $('#amount').val('');
                            $('#fallados').val('');
                            $('#amount').focus();
                           
                             return false;
                        }
                        if(($('#amount').val() <1)&&($('#fallados').val() <1)){
                            alert("por lo menos una cantidad (buenos o fallados) debe ser mayor a 1");
                            $('#amount').val('');
                             $('#amount').focus();
   
                             return false;
                        }
                        
                          if($('#fallados').val()>0){
                             $('#observaciones').focus(); 
                          }else{
                                agregarItemaListado();
                                ///PREPARAR TODO PARA NUEVA CARGA
      /*                          $('#barcode').focus();
                                $('#cargarapidadetalleitem').empty();
                                $('#td4').empty();
                                $('#td5').empty();
                                $('#td6').empty();
                                $('#amount').val('');
                                $('#cifras').val(4);                        
                                $('#barcode').val('');
                                $('#fallados').val('');
                                $('#observaciones').val('');*/
                          }
                          
                          break;
                  }
                  
                  case 'observaciones':{
                          agregarItemaListado();
                            ///PREPARAR TODO PARA NUEVA CARGA
                            $('#barcode').focus();
                            $('#cargarapidadetalleitem').empty();
                            $('#td4').empty();
                            $('#td5').empty();
                            $('#td6').empty();
                            $('#amount').val('');
                            $('#cifras').val(4);                        
                            $('#barcode').val('');
                            $('#fallados').val('');
                            $('#observaciones').val('');
                          break;
                  }
                  
                  default:{
                          $('#barcode').focus();
                          break;
                  }
              }
            
             return false;
         });  
         
         
          //////CAPTURAR TECLA F5
           /*      
            $(function() {
               $(document).keydown(function(e){
                var code = (e.keyCode ? e.keyCode : e.which);
                if((code == 116)||(code == 9)||((e.ctrlKey || e.metaKey))) {
                 e.preventDefault();
                 
                }
               });
              });
             */    
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