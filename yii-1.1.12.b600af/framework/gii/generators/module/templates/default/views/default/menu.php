<div style=" width: 500px; height: 20px;">
<h4>
    <?php echo "<?php"; ?> echo "Modulo " .$this->module->id; ?>
</h4>
</div>
<?php echo "<?php"; ?> 

    $this->widget('application.extensions.menu.SMenu',
        array(
                "menu"=>array(
                                array(
                                                "url"=>array("route"=>"/".$this->module->id."/controlador/admin"),
                                                "label"=>"menu1",
                                                array(
                                                        "url"=>array("route"=>"/".$this->module->id."/controlador/admin"),
                                                        "label"=>"item1"
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