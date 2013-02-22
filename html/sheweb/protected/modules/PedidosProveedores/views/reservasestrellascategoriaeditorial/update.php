<?php
/* @var $this ReservasestrellascategoriaeditorialController */
/* @var $model Reservasestrellascategoriaeditorial */

$this->breadcrumbs=array(
	'Reservasestrellascategoriaeditorials'=>array('index'),
	$model->idreservasestrellascategoriaeditorial=>array('view','id'=>$model->idreservasestrellascategoriaeditorial),
	'Update',
);

$this->menu=array(
	array('label'=>'List Reservasestrellascategoriaeditorial', 'url'=>array('index')),
	array('label'=>'Create Reservasestrellascategoriaeditorial', 'url'=>array('create')),
	array('label'=>'View Reservasestrellascategoriaeditorial', 'url'=>array('view', 'id'=>$model->idreservasestrellascategoriaeditorial)),
	array('label'=>'Manage Reservasestrellascategoriaeditorial', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>

<h1>Update Reservasestrellascategoriaeditorial <?php echo $model->idreservasestrellascategoriaeditorial; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>