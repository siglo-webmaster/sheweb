<div style=" width: 500px; height: 20px;">
<h4><?php echo "Modulo " .$this->module->id; ?></h4>
</div>
<?php

    $this->widget('application.extensions.menu.SMenu',
        array(
                "menu"=>array(
                        array("url"=>array(),
                                     "label"=>"Locaciones",
                                array("url"=>array(),
                                     "label"=>"Geografia",
                                    //GEOGRAFIA
                                        array("url"=>array(
                                                          "route"=>"/Parametros/pais/admin"
                                                     ),
                                            //GEOGRAFIA->PAISES
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
                                        //GEOGRAFIA->DEPARTAMENTOS
                                       array("url"=>array(
                                                          "route"=>"/Parametros/departamento/admin"
                                                     ),
                                                     "label"=>"Departamentos",
                                                      array(
                                                          "url"=>array("route"=>"/Parametros/departamento/create"),
                                                          "label"=>"Nuevo departamento",
                                                      ),
                                                      array(
                                                          "url"=>array("route"=>"/Parametros/departamento/index"),
                                                          "label"=>"Listar departamentos",
                                                      )
                                        ),
                                       //GEOGRAFIA->CIUDADES
                                      array("url"=>array(
                                                          "route"=>"/Parametros/ciudad/admin"
                                                     ),
                                                     "label"=>"Ciudades",
                                                      array(
                                                          "url"=>array("route"=>"/Parametros/ciudad/create"),
                                                          "label"=>"Nueva ciudad",
                                                      ),
                                                      array(
                                                          "url"=>array("route"=>"/Parametros/ciudad/index"),
                                                          "label"=>"Listar ciudades",
                                                      )
                                        ),
                                  ),//FIN GEOGRAFIA
                                  //BODEGAS
                                  array("url"=>array("route"=>"/Parametros/bodega/admin"),
                                        "label"=>"Bodegas",
                                            array(
                                                "url"=>array("route"=>"/Parametros/bodega/create"),
                                                  "label"=>"Nueva bodega",
                                              ),
                                             array(
                                                  "url"=>array("route"=>"/Parametros/bodega/index"),
                                                  "label"=>"Listar bodegas",
                                              )
                                      ),
                          ),///FIN LOCACIONES
                          
                        //TIPO
                         array("url"=>array(),
                                "label"=>"Tipos",
                             
                                //TIPO->MONEDAS
                                array("url"=>array("route"=>"/Parametros/moneda/admin"),
                                       "label"=>"monedas",
                                            array(
                                                "url"=>array("route"=>"/Parametros/moneda/create"),
                                                  "label"=>"Nueva moneda",
                                              ),
                                             array(
                                                  "url"=>array("route"=>"/Parametros/moneda/index"),
                                                  "label"=>"Listar monedas",
                                              )
                                    
                                ),//FIN TIPO->MONEDAS
                             
                                //TIPO->Tipos de formato
                                array("url"=>array("route"=>"/Parametros/tipoformato/admin"),
                                       "label"=>"Tipos de formato",
                                            array(
                                                "url"=>array("route"=>"/Parametros/tipoformato/create"),
                                                  "label"=>"Nuevo tipoformato",
                                              ),
                                             array(
                                                  "url"=>array("route"=>"/Parametros/tipoformato/index"),
                                                  "label"=>"Listar tipoformatos",
                                              )
                                    
                                ),//FIN TIPO->Tipos de formatos
                             
                                 //TIPO->Tipos de identificacion
                                array("url"=>array("route"=>"/Parametros/tiposidentificacion/admin"),
                                       "label"=>"Tipos identificacion",
                                            array(
                                                "url"=>array("route"=>"/Parametros/tiposidentificacion/create"),
                                                  "label"=>"Nuevo tipoidentificacion",
                                              ),
                                             array(
                                                  "url"=>array("route"=>"/Parametros/tiposidentificacion/index"),
                                                  "label"=>"Listar tipoidentificacion",
                                              )
                                    
                                ),//FIN TIPO->Tipos de identificacion
                             
                             
                                 //TIPO->Tipos de terceros
                                array("url"=>array("route"=>"/Parametros/tiposterceros/admin"),
                                       "label"=>"Tipos terceros",
                                            array(
                                                "url"=>array("route"=>"/Parametros/tiposterceros/create"),
                                                  "label"=>"Nuevo tipotercero",
                                              ),
                                             array(
                                                  "url"=>array("route"=>"/Parametros/tiposterceros/index"),
                                                  "label"=>"Listar tiposterceros",
                                              )
                                    
                                ),//FIN TIPO->Tipos de terceros
                             
                         ),//FIN TIPO
                    
                    ),///FIN MENU
                    
                "stylesheet"=>"menu_blue1.css",
                "menuID"=>"myMenu",
                "delay"=>3
            )
   );
?>
<br>&nbsp;<br>
<hr class="separador_blanco">