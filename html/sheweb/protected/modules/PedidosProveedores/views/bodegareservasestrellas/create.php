<?php
/* @var $this BodegareservasestrellasController */
/* @var $model Bodegareservasestrellas */

$this->breadcrumbs=array(
);

$this->menu=array(
);
?>

<h1>Crear Bodega - reservas - estrellas</h1>

<?php 
$this->layout= false;
echo $this->renderPartial('_form', array('model'=>$model, 'id'=>$id)); ?>