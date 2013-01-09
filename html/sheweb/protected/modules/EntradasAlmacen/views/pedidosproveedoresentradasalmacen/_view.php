<?php
/* @var $this PedidosproveedoresentradasalmacenController */
/* @var $data Pedidosproveedoresentradasalmacen */
?>

<div class="view">
    <table width="100%">
        <tr>
            <td><b>Fecha Entrada:</b><?php echo CHtml::encode($data->fecha); ?></td>
            <td><b>Bodega:</b><?php echo CHtml::encode($data->bodega_idbodega); ?></td>
            <td><Usuario: <?php echo CHtml::encode($data->usuarios_idusuarios); ?></td>
            <td>Pedido #: <?php echo CHtml::encode($data->pedidosproveedores_idpedidosproveedores); ?></td>
        </tr>
    </table>
    
    <table width="100%">
        <thead>
            <th>C&oacute;digo</th>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Cantidad</th>
        </thead>
        <tbody>
            
       <?php
        foreach($items as $row){
            echo "<tr>";
            echo "<td>".$row['item_iditem']."</td>";
            echo "<td>".$row['nombre']."</td>";
            echo "<td>".$row['condicioncomercial']."</td>";
            echo "<td>".$row['cantidad']."</td>";
            echo "</tr>";
        }
       ?>
            
        </tbody>
    </table>
	

	<b><?php echo CHtml::encode($data->getAttributeLabel('observaciones')); ?>:</b>
	<?php echo CHtml::encode($data->observaciones); ?>
	<br />
        

</div>