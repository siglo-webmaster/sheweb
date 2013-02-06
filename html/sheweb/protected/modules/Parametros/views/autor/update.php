<?php
/* @var $this AutorController */
/* @var $model Autor */

$this->breadcrumbs=array(
	'Autors'=>array('index'),
	$model->idautor=>array('view','id'=>$model->idautor),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Autores', 'url'=>array('index')),
	array('label'=>'Crear Autor', 'url'=>array('create')),
	array('label'=>'Ver Autor', 'url'=>array('view', 'id'=>$model->idautor)),
	array('label'=>'Administrar Autores', 'url'=>array('admin')),
);
?>
<?php include_once(Yii::app()->basePath . "/modules/".$this->module->id."/views/default/menu.php"); ?>
<h1>Actualizar Autor <?php echo $model->idautor; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>