<?php
/* @var $this PedidosproveedoresentradasalmacenController */
/* @var $model Pedidosproveedoresentradasalmacen */

$this->breadcrumbs=array(
	'Pedidosproveedoresentradasalmacens'=>array('index'),
	$model->idpedidosproveedoresentradasalmacen,
);

$this->menu=array(
	array('label'=>'Entradas pendientes', 'url'=>array('index')),
	array('label'=>'Consultar entradas', 'url'=>array('admin')),
);
?>


<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>

<?php

       $this->widget('ext.mPrint.mPrint', array(
            'title' => 'Siglo del Hombre Editores S.A.',        //the title of the document. Defaults to the HTML title
            'tooltip' => 'Imprimir',    //tooltip message of the print icon. Defaults to 'print'
            'text' => NULL, //text which will appear beside the print icon. Defaults to NULL
            'element' => '#entrada',      //the element to be printed.
            'exceptions' => array(     //the element/s which will be ignored
                '.summary',
                '.search-form',
            ),
            'publishCss' => true       //publish the CSS for the whole page?
        ));
 
?>

<div id="entrada">
<h3>Entrada de almac&eacute;n  #<?php echo $model->idpedidosproveedoresentradasalmacen; ?></h3>

<?php echo $this->renderPartial('_view', array('data'=>$model,'items'=>$items,'fallados'=>$fallados)); ?>

</div>