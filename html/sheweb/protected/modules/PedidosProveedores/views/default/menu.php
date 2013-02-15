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
                                                        "url"=>array("route"=>"/".$this->module->id."/pedidosproveedores/index/estado/impreso"),
                                                        "label"=>"Pedidos Impresos"
                                                ),

                                                array(
                                                        "url"=>array("route"=>"/".$this->module->id."/pedidosproveedores/index/estado/cerrado"),
                                                        "label"=>"Pedidos Cerrados"
                                                ),
                                ),
                                //
                                
                                array(
                                                "url"=>array("route"=>"/".$this->module->id."/proyectosespeciales/index"),
                                                "label"=>"Proyectos especiales",
                                                array(
                                                        "url"=>array("route"=>"/".$this->module->id."/proyectosespeciales/create"),
                                                        "label"=>"Nuevo Proyecto"
                                                ),
                                                array(
                                                        "url"=>array("route"=>"/".$this->module->id."/proyectosespeciales/index"),
                                                        "label"=>"Proyectos Activos"
                                                ),

                                                array(
                                                        "url"=>array("route"=>"/".$this->module->id."/proyectosespeciales/admin"),
                                                        "label"=>"Admin proyectos"
                                                ),
                                                array(
                                                        "url"=>array("route"=>"/".$this->module->id."/proyectosespecialesHasUsergroupsUser"),
                                                        "label"=>"Usuarios-proyectos"
                                                ),
                                                array(
                                                        "url"=>array("route"=>"/".$this->module->id."/porcentajesreservas"),
                                                        "label"=>"Porcentajesreservas"
                                                ),
                                ),
                                array(
                                                "url"=>array("route"=>""),
                                                "label"=>"EXTRA",
                                     array(
                                                    "url"=>array("route"=>"/".$this->module->id."/cargasexcel/index"),
                                                    "label"=>"Cargas excel",
                                    ),
                                     array(
                                                    "url"=>array("route"=>"/".$this->module->id."/estrellas/index"),
                                                    "label"=>"Estrellas",
                                    ),
                                    array(
                                                    "url"=>array("route"=>"/".$this->module->id."/estrellascategoriaeditorial/index"),
                                                    "label"=>"Estrellas cat-edit",
                                    ),
                                    array(
                                                    "url"=>array("route"=>"/".$this->module->id."/reservasestrellascategoriaeditorial/index"),
                                                    "label"=>"Reserva estrellas",
                                    ),
                                ),
                    
                                //
                        ),
                "stylesheet"=>"menu_blue1.css",
                "menuID"=>"myMenu",
                "delay"=>3
            )
   );
?>
<br>&nbsp;<br>
<hr class="separador_blanco">