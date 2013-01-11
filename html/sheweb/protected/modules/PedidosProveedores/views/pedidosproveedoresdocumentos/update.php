<?php
/* @var $this PedidosproveedoresdocumentosController */
/* @var $model Pedidosproveedoresdocumentos */

$this->breadcrumbs=array(
	'Pedidosproveedoresdocumentoses'=>array('index'),
	$model->idpedidosproveedoresdocumentos=>array('view','id'=>$model->idpedidosproveedoresdocumentos),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pedidosproveedoresdocumentos', 'url'=>array('index')),
	array('label'=>'Create Pedidosproveedoresdocumentos', 'url'=>array('create')),
	array('label'=>'View Pedidosproveedoresdocumentos', 'url'=>array('view', 'id'=>$model->idpedidosproveedoresdocumentos)),
	array('label'=>'Manage Pedidosproveedoresdocumentos', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>Update Pedidosproveedoresdocumentos <?php echo $model->idpedidosproveedoresdocumentos; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>