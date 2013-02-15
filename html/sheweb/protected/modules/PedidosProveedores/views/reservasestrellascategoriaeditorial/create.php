<?php
/* @var $this ReservasestrellascategoriaeditorialController */
/* @var $model Reservasestrellascategoriaeditorial */

$this->breadcrumbs=array(
	'Reservasestrellascategoriaeditorials'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Reservasestrellascategoriaeditorial', 'url'=>array('index')),
	array('label'=>'Manage Reservasestrellascategoriaeditorial', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>Create Reservasestrellascategoriaeditorial</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>