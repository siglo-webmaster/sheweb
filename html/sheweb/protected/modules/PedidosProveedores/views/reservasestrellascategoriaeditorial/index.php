<?php
/* @var $this ReservasestrellascategoriaeditorialController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Reservasestrellascategoriaeditorials',
);

$this->menu=array(
	array('label'=>'Create Reservasestrellascategoriaeditorial', 'url'=>array('create')),
	array('label'=>'Manage Reservasestrellascategoriaeditorial', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>

<h1>Reservas - estrellas - categor&iacute;a - editorial - ciudad</h1>

<?php 

        $headers = array(
                    array('name'=>'idreservasestrellascategoriaeditorial',//id del campo
                          'label'=>'id',//etiqueta a mostrar
                          'width'=>'40',
                           'sortable'=>'true',
                          ),
                    
                      array('name'=>'ciudad_idciudad',//id del campo
                          'label'=>'idciudad',//etiqueta a mostrar
                          'hidden'=>'false',
                          'width'=>'1',
                          ),
                       array('name'=>'categoria',
                          'width'=>'100',
                          'label'=>'categoria',
                          'sortable'=>'true',
                          ),
                       array('name'=>'editorial',
                          'width'=>'100',
                          'label'=>'editorial',
                          'sortable'=>'true',
                          ),
                        array('name'=>'condicioncomercial',
                          'width'=>'40',
                          'label'=>'cond',
                          'sortable'=>'true',
                          ),
                         array('name'=>'estrellas_idestrellas',//id del campo
                          'label'=>'estrellas',//etiqueta a mostrar
                          'hidden'=>'false',
                          'width'=>'50',
                          ),
                          
                          array('name'=>'ciudad',//id del campo
                          'label'=>'ciudad',//etiqueta a mostrar
                          'hidden'=>'false',
                          'width'=>'150',
                          ),
                          
                         
                         array('name'=>'cantidad',
                                  'width'=>'80',
                                  'label'=>'cantidad',
                                   'editor'=>'true',
                                   'type'=>'combobox',
                                   'values'=>array('url'=>Yii::app()->baseUrl.'/PedidosProveedores/reservasestrellascategoriaeditorial/getcantidades',
                                        'valueField'=>'idcantidad',
                                        'textField'=>'idcantidad',
                                    ),
                         ),
                         array('name'=>'prioridad',
                                  'width'=>'80',
                                  'label'=>'prioridad',
                                   'editor'=>'true',
                                   'type'=>'combobox',
                                   'values'=>array('url'=>Yii::app()->baseUrl.'/PedidosProveedores/reservasestrellascategoriaeditorial/getprioridades',
                                        'valueField'=>'idprioridad',
                                        'textField'=>'idprioridad',
                                    ),
                         ),
                    );
        
        
        $this->widget('ext.tablaeasyUi.easyUi',
                array(
                 'id'=>'dg', ///id unico de la tabla
                 'width'=>'700', //ancho
                 'height'=>'300', //alto
                 'pk'=>'idreservasestrellascategoriaeditorial', //primary key for eddit
                 'title'=>'Reservas Estrellas categorias editoriales', //titulo
                 'headers'=>$headers, //array de cabeceras
                 'menubutton'=>array(array('onclick'=>'saveChanges','label'=>'Guardar cambios')),
                 'dialoginfo'=>Yii::app()->baseUrl.'/PedidosProveedores/bodegareservasestrellas/index/',
                 'action'=>Yii::app()->baseUrl.'/PedidosProveedores/reservasestrellascategoriaeditorial/getreservasestrellascategoriaeditorial', //url de los datos
                 'saveurl'=>Yii::app()->baseUrl.'/PedidosProveedores/estrellascategoriaeditorial/savechangesestrellascategoriaeditorial/',
                    )
                );

/*

$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 

*/
?>
