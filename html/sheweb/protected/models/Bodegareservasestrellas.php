<?php

/**
 * This is the model class for table "bodegareservasestrellas".
 *
 * The followings are the available columns in table 'bodegareservasestrellas':
 * @property integer $idbodegareservasestrellas
 * @property integer $bodega_idbodega
 * @property string $idreservasestrellascategoriaeditorial
 * @property integer $cantidad
 * @property integer $prioridad
 *
 * The followings are the available model relations:
 * @property Bodega $bodegaIdbodega
 * @property Reservasestrellascategoriaeditorial $idreservasestrellascategoriaeditorial0
 */
class Bodegareservasestrellas extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Bodegareservasestrellas the static model class
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
		return 'bodegareservasestrellas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('bodega_idbodega, idreservasestrellascategoriaeditorial, cantidad, prioridad', 'required'),
			array('bodega_idbodega, cantidad, prioridad', 'numerical', 'integerOnly'=>true),
			array('idreservasestrellascategoriaeditorial', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idbodegareservasestrellas, bodega_idbodega, idreservasestrellascategoriaeditorial, cantidad, prioridad', 'safe', 'on'=>'search'),
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
			'bodegaIdbodega' => array(self::BELONGS_TO, 'Bodega', 'bodega_idbodega'),
			'idreservasestrellascategoriaeditorial0' => array(self::BELONGS_TO, 'Reservasestrellascategoriaeditorial', 'idreservasestrellascategoriaeditorial'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idbodegareservasestrellas' => 'Idbodegareservasestrellas',
			'bodega_idbodega' => 'Bodega Idbodega',
			'idreservasestrellascategoriaeditorial' => 'Idreservasestrellascategoriaeditorial',
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

		$criteria->compare('idbodegareservasestrellas',$this->idbodegareservasestrellas);
		$criteria->compare('bodega_idbodega',$this->bodega_idbodega);
		$criteria->compare('idreservasestrellascategoriaeditorial',$this->idreservasestrellascategoriaeditorial,true);
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