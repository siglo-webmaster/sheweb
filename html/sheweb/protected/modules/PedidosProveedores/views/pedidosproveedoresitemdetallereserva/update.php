<?php
/* @var $this PedidosproveedoresitemdetallereservaController */
/* @var $model Pedidosproveedoresitemdetallereserva */

$this->breadcrumbs=array(
	'Pedidosproveedoresitemdetallereservas'=>array('index'),
	$model->idpedidosproveedoresitemdetallereserva=>array('view','id'=>$model->idpedidosproveedoresitemdetallereserva),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pedidosproveedoresitemdetallereserva', 'url'=>array('index')),
	array('label'=>'Create Pedidosproveedoresitemdetallereserva', 'url'=>array('create')),
	array('label'=>'View Pedidosproveedoresitemdetallereserva', 'url'=>array('view', 'id'=>$model->idpedidosproveedoresitemdetallereserva)),
	array('label'=>'Manage Pedidosproveedoresitemdetallereserva', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>Update Pedidosproveedoresitemdetallereserva <?php echo $model->idpedidosproveedoresitemdetallereserva; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>