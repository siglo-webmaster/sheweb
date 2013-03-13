<?php
/* @var $this EstrellascategoriaeditorialController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Estrellascategoriaeditorials',
);

$this->menu=array(
	array('label'=>'Nuevo', 'url'=>array('create')),
	array('label'=>'Administrar', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>

<h1>Estrellas - Categorias - Editoriales</h1>

<?php 

 

        $headers = array(
                    array('name'=>'idestrellascategoriaeditorial',//id del campo
                          'label'=>'id',//etiqueta a mostrar
                          'hidden'=>'false',
                          'width'=>'20',
                          ),
                    
                      array('name'=>'categoria_idcategoria',
                          'width'=>'20',
                          'label'=>'idcat',
                          'sortable'=>'true',
                          ),
                      array('name'=>'editorial_ideditorial',
                          'width'=>'20',
                          'label'=>'ided',
                          'sortable'=>'true',
                          ),
                      array('name'=>'condicioncomercial_idcondicioncomercial',
                          'width'=>'20',
                          'label'=>'idcond',
                          'sortable'=>'true',
                          ),
                       array('name'=>'categoria',
                          'width'=>'200',
                          'label'=>'categoria',
                          'sortable'=>'true',
                          ),
                       array('name'=>'editorial',
                          'width'=>'200',
                          'label'=>'editorial',
                          'sortable'=>'true',
                          ),
                        array('name'=>'condicioncomercial',
                          'width'=>'100',
                          'label'=>'condicion comercial',
                          'sortable'=>'true',
                          ),
                         array('name'=>'estrellas_idestrellas',//id del campo
                          'label'=>'estrellas',//etiqueta a mostrar
                          'hidden'=>'false',
                          'width'=>'50',
                          ),
                          
                         array('name'=>'cantidad',
                                  'width'=>'50',
                                  'label'=>'cantidad',
                                   'editor'=>'true',
                                   'type'=>'combobox',
                                   'values'=>array('url'=>Yii::app()->baseUrl.'/PedidosProveedores/estrellascategoriaeditorial/getcantidades',
                                        'valueField'=>'idcantidad',
                                        'textField'=>'idcantidad',
                                    ),
                         ),
                    );
        
        
        $this->widget('ext.tablaeasyUi.easyUi',
                array(
                 'id'=>'dg', ///id unico de la tabla
                 'width'=>'700', //ancho
                 'height'=>'300', //alto
                 'pk'=>'idestrellascategoriaeditorial', //primary key for eddit
                 'title'=>'Estrellas categorias editoriales', //titulo
                 'headers'=>$headers, //array de cabeceras
                 'menubutton'=>array(array('onclick'=>'saveChanges','label'=>'Guardar cambios')),
                 'dialoginfo'=>Yii::app()->baseUrl.'/PedidosProveedores/reservasestrellascategoriaeditorial/index/',
                 'action'=>Yii::app()->baseUrl.'/PedidosProveedores/estrellascategoriaeditorial/getestrellascategoriaeditorial', //url de los datos
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
