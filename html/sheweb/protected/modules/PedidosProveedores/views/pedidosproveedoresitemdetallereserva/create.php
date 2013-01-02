<?php
/* @var $this PedidosproveedoresitemdetallereservaController */
/* @var $model Pedidosproveedoresitemdetallereserva */

$this->breadcrumbs=array(
	'Pedidosproveedoresitemdetallereservas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Pedidosproveedoresitemdetallereserva', 'url'=>array('index')),
	array('label'=>'Manage Pedidosproveedoresitemdetallereserva', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>Create Pedidosproveedoresitemdetallereserva</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>