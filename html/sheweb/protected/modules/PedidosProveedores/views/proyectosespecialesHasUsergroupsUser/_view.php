<?php
/* @var $this ProyectosespecialesHasUsergroupsUserController */
/* @var $data ProyectosespecialesHasUsergroupsUser */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idproyectosespeciales_has_usergroups_user')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idproyectosespeciales_has_usergroups_user), array('view', 'id'=>$data->idproyectosespeciales_has_usergroups_user)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('proyectosespeciales_idproyectosespeciales')); ?>:</b>
	<?php echo CHtml::encode($data->proyectosespecialesIdproyectosespeciales->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usergroups_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->usergroupsUser->username); ?>
	<br />


</div>