<?php
/* @var $this BodegareservasestrellasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Bodegareservasestrellases',
);

$this->menu=array(
	array('label'=>'Create Bodegareservasestrellas', 'url'=>array('create')),
	array('label'=>'Manage Bodegareservasestrellas', 'url'=>array('admin')),
);
?>

<h1>Bodega reservas estrellas</h1>

<?php
    echo CHtml::link('Crear nueva reserva',Yii::app()->baseUrl.'/PedidosProveedores/bodegareservasestrellas/create/id/'.$id);

?>

<?php 

        $headers = array(
                    array('name'=>'idbodegareservasestrellas',//id del campo
                          'label'=>'id',//etiqueta a mostrar
                          'width'=>'10',
                           'sortable'=>'true',
                          ),
                    array('name'=>'idreservasestrellascategoriaeditorial',//id del campo
                          'label'=>'idreservasestrellascategoriaeditorial',//etiqueta a mostrar
                          'width'=>'1',
                           'sortable'=>'true',
                          ),
                    
                     array('name'=>'nombrebodega',//id del campo
                          'label'=>'bodega',//etiqueta a mostrar
                          'width'=>'200',
                           'sortable'=>'true',
                     ),
                     array('name'=>'nombreciudad',//id del campo
                          'label'=>'ciudad',//etiqueta a mostrar
                          'width'=>'140',
                           'sortable'=>'true',
                     ),
                     array('name'=>'cantidadbodega',//id del campo
                          'label'=>'cantidadbodega',//etiqueta a mostrar
                          'width'=>'140',
                           'sortable'=>'true',
                     ),
                     array('name'=>'prioridadbodega',//id del campo
                          'label'=>'prioridadbodega',//etiqueta a mostrar
                          'width'=>'140',
                           'sortable'=>'true',
                     ),
                      
                    );
        
        
        $this->widget('ext.tablaeasyUi.easyUi',
                array(
                 'id'=>'dg', ///id unico de la tabla
                 'width'=>'700', //ancho
                 'height'=>'300', //alto
                 'pk'=>'idbodegareservasestrellas', //primary key for eddit
                 'title'=>'Bodega Reservas Estrellas', //titulo
                 'headers'=>$headers, //array de cabeceras
                 'menubutton'=>array(array('onclick'=>'saveChanges','label'=>'Guardar cambios')),
               //  'dialoginfo'=>Yii::app()->baseUrl.'/PedidosProveedores/bodegareservasestrellas/index/',
                 'action'=>Yii::app()->baseUrl.'/PedidosProveedores/bodegareservasestrellas/getbodegareservasestrellas/id/'.$id, //url de los datos
                // 'saveurl'=>Yii::app()->baseUrl.'/PedidosProveedores/estrellascategoriaeditorial/savechangesestrellascategoriaeditorial/',
                    )
                );

/*

$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 

*/
?>


<?php
/*

$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 
 * 
 * 
 */

?>