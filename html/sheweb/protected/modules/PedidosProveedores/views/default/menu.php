<div style=" width: 500px; height: 20px;">
<h4>
    <?php echo "Modulo " .$this->module->id; ?>
</h4>
</div>
<?php 

    $this->widget('application.extensions.menu.SMenu',
        array(
                "menu"=>array(
                                array(
                                                "url"=>array("route"=>"/".$this->module->id."/pedidosproveedores/index"),
                                                "label"=>"Pedidos a proveedor",
                                                array(
                                                        "url"=>array("route"=>"/".$this->module->id."/pedidosproveedores/create"),
                                                        "label"=>"Nuevo Pedido"
                                                ),
                                                array(
                                                        "url"=>array("route"=>"/".$this->module->id."/pedidosproveedores/index"),
                                                        "label"=>"Pedidos Activos"
                                                ),

                                                array(
                                                        "url"=>array("route"=>"/".$this->module->id."/pedidosproveedores/index/estado/aprobado"),
                                                        "label"=>"Pedidos Aprobados"
                                                ),

                                                array(
                                                        "url"=>array("route"=>"/".$this->module->id."/pedidosproveedores/index/estado/cerrado"),
                                                        "label"=>"Pedidos Cerrados"
                                                ),
                                ),
                    
                                
                        ),
                "stylesheet"=>"menu_blue1.css",
                "menuID"=>"myMenu",
                "delay"=>3
            )
   );
?>
<br>&nbsp;<br>
<hr class="separador_blanco">