<?php

/**
 * This is the model class for table "reservasestrellascategoriaeditorial".
 *
 * The followings are the available columns in table 'reservasestrellascategoriaeditorial':
 * @property string $idreservasestrellascategoriaeditorial
 * @property string $estrellascategoriaeditorial_idestrellascategoriaeditorial
 * @property string $usergroups_user_id
 * @property integer $bodega_idbodega
 * @property integer $cantidad
 * @property integer $prioridad
 *
 * The followings are the available model relations:
 * @property Estrellascategoriaeditorial $estrellascategoriaeditorialIdestrellascategoriaeditorial
 * @property UsergroupsUser $usergroupsUser
 * @property Bodega $bodegaIdbodega
 */
class Reservasestrellascategoriaeditorial extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Reservasestrellascategoriaeditorial the static model class
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
		return 'reservasestrellascategoriaeditorial';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('estrellascategoriaeditorial_idestrellascategoriaeditorial, usergroups_user_id, bodega_idbodega, cantidad, prioridad', 'required'),
			array('bodega_idbodega, cantidad, prioridad', 'numerical', 'integerOnly'=>true),
			array('estrellascategoriaeditorial_idestrellascategoriaeditorial, usergroups_user_id', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idreservasestrellascategoriaeditorial, estrellascategoriaeditorial_idestrellascategoriaeditorial, usergroups_user_id, bodega_idbodega, cantidad, prioridad', 'safe', 'on'=>'search'),
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
			'estrellascategoriaeditorialIdestrellascategoriaeditorial' => array(self::BELONGS_TO, 'Estrellascategoriaeditorial', 'estrellascategoriaeditorial_idestrellascategoriaeditorial'),
			'usergroupsUser' => array(self::BELONGS_TO, 'UsergroupsUser', 'usergroups_user_id'),
			'bodegaIdbodega' => array(self::BELONGS_TO, 'Bodega', 'bodega_idbodega'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idreservasestrellascategoriaeditorial' => 'Idreservasestrellascategoriaeditorial',
			'estrellascategoriaeditorial_idestrellascategoriaeditorial' => 'Estrellascategoriaeditorial Idestrellascategoriaeditorial',
			'usergroups_user_id' => 'Usergroups User',
			'bodega_idbodega' => 'Bodega Idbodega',
			'cantidad' => 'Cantidad',
			'prioridad' => 'Prioridad',
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

		$criteria->compare('idreservasestrellascategoriaeditorial',$this->idreservasestrellascategoriaeditorial,true);
		$criteria->compare('estrellascategoriaeditorial_idestrellascategoriaeditorial',$this->estrellascategoriaeditorial_idestrellascategoriaeditorial,true);
		$criteria->compare('usergroups_user_id',$this->usergroups_user_id,true);
		$criteria->compare('bodega_idbodega',$this->bodega_idbodega);
		$criteria->compare('cantidad',$this->cantidad);
		$criteria->compare('prioridad',$this->prioridad);

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