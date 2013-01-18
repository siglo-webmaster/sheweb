<?php

class DefaultController extends Controller
{
        static $_permissionControl = array( 'read'=>'Consultar');
        /**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'userGroupsAccessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}
        
        /**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				 'pbac'=>array('read'),
			),
                        array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
        
        
	public function actionIndex()
	{
		$this->render('index');
	}
}