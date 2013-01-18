<?php

/**
 * This is the model class for table "proyectosespeciales_has_usergroups_user".
 *
 * The followings are the available columns in table 'proyectosespeciales_has_usergroups_user':
 * @property integer $idproyectosespeciales_has_usergroups_user
 * @property integer $proyectosespeciales_idproyectosespeciales
 * @property string $usergroups_user_id
 *
 * The followings are the available model relations:
 * @property Proyectosespeciales $proyectosespecialesIdproyectosespeciales
 * @property UsergroupsUser $usergroupsUser
 */
class ProyectosespecialesHasUsergroupsUser extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ProyectosespecialesHasUsergroupsUser the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'proyectosespeciales_has_usergroups_user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('proyectosespeciales_idproyectosespeciales, usergroups_user_id', 'required'),
			array('proyectosespeciales_idproyectosespeciales', 'numerical', 'integerOnly'=>true),
			array('usergroups_user_id', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idproyectosespeciales_has_usergroups_user, proyectosespeciales_idproyectosespeciales, usergroups_user_id', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'proyectosespecialesIdproyectosespeciales' => array(self::BELONGS_TO, 'Proyectosespeciales', 'proyectosespeciales_idproyectosespeciales'),
			'usergroupsUser' => array(self::BELONGS_TO, 'UsergroupsUser', 'usergroups_user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idproyectosespeciales_has_usergroups_user' => 'Idproyectosespeciales Has Usergroups User',
			'proyectosespeciales_idproyectosespeciales' => 'Proyectosespeciales Idproyectosespeciales',
			'usergroups_user_id' => 'Usergroups User',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('idproyectosespeciales_has_usergroups_user',$this->idproyectosespeciales_has_usergroups_user);
		$criteria->compare('proyectosespeciales_idproyectosespeciales',$this->proyectosespeciales_idproyectosespeciales);
		$criteria->compare('usergroups_user_id',$this->usergroups_user_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        
        /*LOG DE CAMBIOS*/
        public function behaviors()
        {
            return array(
                'LoggableBehavior'=>
                    'application.extensions.auditTrail.behaviors.LoggableBehavior',
            );
        }
 
}