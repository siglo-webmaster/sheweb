<?php
/* @var $this DefaultController */

$this->breadcrumbs=array(
	$this->module->id,
);
?>

<?php
    $this->widget('application.extensions.menu.SMenu',
        array(
                "menu"=>array(
                        array("url"=>array(),
                                     "label"=>"Locaciones",
                                array("url"=>array(
                                                  "route"=>"pais/admin"
                                             ),
                                             "label"=>"Paises",
                                              array(
                                                  "url"=>array("route"=>"/Parametros/pais/create"),
                                                  "label"=>"Nuevo pais",
                                              ),
                                              array(
                                                  "url"=>array("route"=>"/Parametros/pais/index"),
                                                  "label"=>"Listar paises",
                                              )
                                ),
                          ),
                    ),
                "stylesheet"=>"menu_blue1.css",
                "menuID"=>"myMenu",
                "delay"=>3
            )
   );
?>

<h1><?php echo $this->uniqueId . '/' . $this->action->id; ?></h1>

<p>
This is the view content for action "<?php echo $this->action->id; ?>".
The action belongs to the controller "<?php echo get_class($this); ?>"
in the "<?php echo $this->module->id; ?>" module.
</p>
<p>
You may customize this page by editing <tt><?php echo __FILE__; ?></tt>
</p>