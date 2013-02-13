<?php

/**
 * This is the model class for table "cargasexcel".
 *
 * The followings are the available columns in table 'cargasexcel':
 * @property integer $idcargasexcel
 * @property string $fecha
 * @property string $file
 * @property string $usergroups_user_id
 * @property integer $pedidosproveedores_idpedidosproveedores
 *
 * The followings are the available model relations:
 * @property UsergroupsUser $usergroupsUser
 * @property Pedidosproveedores $pedidosproveedoresIdpedidosproveedores
 * @property Cargasexceldetalle[] $cargasexceldetalles
 */
class Cargasexcel extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Cargasexcel the static model class
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
		return 'cargasexcel';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fecha, file, usergroups_user_id, pedidosproveedores_idpedidosproveedores', 'required'),
			array('pedidosproveedores_idpedidosproveedores', 'numerical', 'integerOnly'=>true),
			array('file', 'length', 'max'=>255),
			array('usergroups_user_id', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idcargasexcel, fecha, file, usergroups_user_id, pedidosproveedores_idpedidosproveedores', 'safe', 'on'=>'search'),
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
			'usergroupsUser' => array(self::BELONGS_TO, 'UsergroupsUser', 'usergroups_user_id'),
			'pedidosproveedoresIdpedidosproveedores' => array(self::BELONGS_TO, 'Pedidosproveedores', 'pedidosproveedores_idpedidosproveedores'),
			'cargasexceldetalles' => array(self::HAS_MANY, 'Cargasexceldetalle', 'cargasexcel_idcargasexcel'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idcargasexcel' => 'Idcargasexcel',
			'fecha' => 'Fecha',
			'file' => 'File',
			'usergroups_user_id' => 'Usergroups User',
			'pedidosproveedores_idpedidosproveedores' => 'Pedidosproveedores Idpedidosproveedores',
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

		$criteria->compare('idcargasexcel',$this->idcargasexcel);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('file',$this->file,true);
		$criteria->compare('usergroups_user_id',$this->usergroups_user_id,true);
		$criteria->compare('pedidosproveedores_idpedidosproveedores',$this->pedidosproveedores_idpedidosproveedores);

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