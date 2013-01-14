<?php
/* @var $this PedidosproveedoresentradasalmacenController */
/* @var $data Pedidosproveedoresentradasalmacen */
?>

<div class="view">
    <table width="100%">
        <tr>
            <td><b>Fecha Entrada:</b><?php echo CHtml::encode($data->fecha); ?></td>
            <td colspan="2"><b>Bodega:</b><?php echo CHtml::encode($data->bodegaIdbodega->nombre); ?></td>
        </tr>
        <tr>
            <td><b>Usuario:</b> <?php echo CHtml::encode($data->usuariosIdusuarios->username); ?></td>
            <td><b>Pedido #:</b><?php echo CHtml::encode($data->pedidosproveedores_idpedidosproveedores); ?></td>
            <td><b>Tipo pedido:</b><?php echo CHtml::encode($data->pedidosproveedoresIdpedidosproveedores->tipopedidosproveedoresIdtipopedidosproveedores->nombre); ?></td>
        </tr>
        <tr>
            <td colspan="3"><b>Documento de proveedor:</b><?php echo CHtml::encode($data->documentoproveedor); ?></td>
        </tr>
    </table>
    
    <?php   
    
    if(isset($items)){
        if(sizeof($items)>0){
        
            echo '<table width="100%">
                    <thead>
                        <tr>
                            <th colspan="4" style="text-align: center;">RECIBIDOS CONFORMES</th>
                        </tr>
                        <tr>
                            <th>C&oacute;digo</th>
                            <th>Nombre</th>
                            <th>Tipo</th>
                            <th>Cantidad</th>
                        </tr>
                    </thead>
                    <tbody>';

                   
                    foreach($items as $row){
                        echo "<tr>";
                        echo "<td>".$row['item_iditem']."</td>";
                        echo "<td>".$row['nombre']."</td>";
                        echo "<td>".$row['condicioncomercial']."</td>";
                        echo "<td>".$row['cantidad']."</td>";
                        echo "</tr>";
                    }
                   

                echo '    </tbody>
                </table>';
            
        }
        
    }
    
    ?>
    
    


    
    <?php
    
    if(isset($fallados)){
        if(sizeof($fallados)>0){
            
            echo '<table width="100%">
            <thead>
                <tr>
                    <th colspan="5" style="text-align: center;">FALLADOS</th>
                </tr>
                <tr>
                    <th>C&oacute;digo</th>
                    <th>Nombre</th>
                    <th>Tipo</th>
                    <th>Cantidad</th>
                    <th>Observaciones</th>
                </tr>
            </thead>
            <tbody>';

            foreach($fallados as $row){
                echo "<tr>";
                echo "<td>".$row['item_iditem']."</td>";
                echo "<td>".$row['nombre']."</td>";
                echo "<td>".$row['condicioncomercial']."</td>";
                echo "<td>".$row['cantidad']."</td>";
                echo "<td>".$row['observaciones']."</td>";
                echo "</tr>";
            }

            echo '</tbody>
            </table>';
            
        }
        
    }
    
   ?>    
                  
        
	

	<b><?php echo CHtml::encode($data->getAttributeLabel('observaciones')); ?>:</b>
	<?php echo CHtml::encode($data->observaciones); ?>
	<br />
        

</div>