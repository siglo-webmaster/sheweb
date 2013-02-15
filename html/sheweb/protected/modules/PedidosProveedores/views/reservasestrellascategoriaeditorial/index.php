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
<h1>Reservasestrellascategoriaeditorials</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
