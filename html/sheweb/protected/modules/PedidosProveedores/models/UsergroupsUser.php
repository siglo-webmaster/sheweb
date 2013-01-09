<?php

/**
 * This is the model class for table "usergroups_user".
 *
 * The followings are the available columns in table 'usergroups_user':
 * @property string $id
 * @property string $group_id
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $home
 * @property integer $status
 * @property string $question
 * @property string $answer
 * @property string $creation_date
 * @property string $activation_code
 * @property string $activation_time
 * @property string $last_login
 * @property string $ban
 * @property string $ban_reason
 *
 * The followings are the available model relations:
 * @property Pedidosproveedores[] $pedidosproveedores
 * @property Pedidosproveedores[] $pedidosproveedores1
 * @property Pedidosproveedoresentradasalmacen[] $pedidosproveedoresentradasalmacens
 * @property Pedidosproveedoresitemdetallereserva[] $pedidosproveedoresitemdetallereservas
 * @property UsergroupsGroup $group
 */
class UsergroupsUser extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return UsergroupsUser the static model class
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
		return 'usergroups_user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, email', 'required'),
			array('status', 'numerical', 'integerOnly'=>true),
			array('group_id', 'length', 'max'=>20),
			array('username, password, email, home', 'length', 'max'=>120),
			array('activation_code', 'length', 'max'=>30),
			array('question, answer, creation_date, activation_time, last_login, ban, ban_reason', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, group_id, username, password, email, home, status, question, answer, creation_date, activation_code, activation_time, last_login, ban, ban_reason', 'safe', 'on'=>'search'),
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
			'pedidosproveedores' => array(self::HAS_MANY, 'Pedidosproveedores', 'usuarioaprobacion'),
			'pedidosproveedores1' => array(self::HAS_MANY, 'Pedidosproveedores', 'usuariocreacion'),
			'pedidosproveedoresentradasalmacens' => array(self::HAS_MANY, 'Pedidosproveedoresentradasalmacen', 'usuarios_idusuarios'),
			'pedidosproveedoresitemdetallereservas' => array(self::HAS_MANY, 'Pedidosproveedoresitemdetallereserva', 'usuarios_idusuarios'),
			'group' => array(self::BELONGS_TO, 'UsergroupsGroup', 'group_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'group_id' => 'Group',
			'username' => 'Username',
			'password' => 'Password',
			'email' => 'Email',
			'home' => 'Home',
			'status' => 'Status',
			'question' => 'Question',
			'answer' => 'Answer',
			'creation_date' => 'Creation Date',
			'activation_code' => 'Activation Code',
			'activation_time' => 'Activation Time',
			'last_login' => 'Last Login',
			'ban' => 'Ban',
			'ban_reason' => 'Ban Reason',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('group_id',$this->group_id,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('home',$this->home,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('question',$this->question,true);
		$criteria->compare('answer',$this->answer,true);
		$criteria->compare('creation_date',$this->creation_date,true);
		$criteria->compare('activation_code',$this->activation_code,true);
		$criteria->compare('activation_time',$this->activation_time,true);
		$criteria->compare('last_login',$this->last_login,true);
		$criteria->compare('ban',$this->ban,true);
		$criteria->compare('ban_reason',$this->ban_reason,true);

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