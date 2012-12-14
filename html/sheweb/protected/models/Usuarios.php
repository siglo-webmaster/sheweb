<?php

/**
 * This is the model class for table "usuarios".
 *
 * The followings are the available columns in table 'usuarios':
 * @property integer $idusuarios
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $estado
 * @property integer $intentos
 *
 * The followings are the available model relations:
 * @property Pedidosproveedores[] $pedidosproveedores
 * @property Pedidosproveedores[] $pedidosproveedores1
 * @property Pedidosproveedoresentradasalmacen[] $pedidosproveedoresentradasalmacens
 * @property Pedidosproveedoresitemsdetalle[] $pedidosproveedoresitemsdetalles
 */
class Usuarios extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Usuarios the static model class
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
		return 'usuarios';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, password, estado', 'required'),
			array('intentos', 'numerical', 'integerOnly'=>true),
			array('username, password, email, estado', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idusuarios, username, password, email, estado, intentos', 'safe', 'on'=>'search'),
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
			'pedidosproveedores' => array(self::HAS_MANY, 'Pedidosproveedores', 'usuariocreacion'),
			'pedidosproveedores1' => array(self::HAS_MANY, 'Pedidosproveedores', 'usuarioaprobacion'),
			'pedidosproveedoresentradasalmacens' => array(self::HAS_MANY, 'Pedidosproveedoresentradasalmacen', 'usuarios_idusuarios'),
			'pedidosproveedoresitemsdetalles' => array(self::HAS_MANY, 'Pedidosproveedoresitemsdetalle', 'usuarios_idusuarios'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idusuarios' => 'Idusuarios',
			'username' => 'Username',
			'password' => 'Password',
			'email' => 'Email',
			'estado' => 'Estado',
			'intentos' => 'Intentos',
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

		$criteria->compare('idusuarios',$this->idusuarios);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('estado',$this->estado,true);
		$criteria->compare('intentos',$this->intentos);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}