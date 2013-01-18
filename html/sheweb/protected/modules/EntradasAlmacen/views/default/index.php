<?php
/* @var $this DefaultController */

$this->breadcrumbs=array(
	$this->module->id,
);
?>
<?php
    if(Yii::app()->user->pbac(array('read'))){
        include_once(Yii::app()->basePath . '/modules/'.$this->module->id.'/views/default/menu.php');
        echo '<p align="center">
        Utilice el men&uacute; superior para desplegar las opciones de trabajo.
        </p>';
    }else{
        throw new CHttpException(401,'NO ESTA AUTORIZADO PARA ACCEDER A ESTE MODULO');
    }
?>
