<?php

/**
 * This is the model class for table "bodega".
 *
 * The followings are the available columns in table 'bodega':
 * @property integer $idbodega
 * @property string $nombre
 * @property string $estado
 *
 * The followings are the available model relations:
 * @property Pedidosproveedoresentradasalmacen[] $pedidosproveedoresentradasalmacens
 * @property Pedidosproveedoresitemdetallereserva[] $pedidosproveedoresitemdetallereservas
 */
class Bodega extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Bodega the static model class
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
		return 'bodega';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, estado', 'required'),
			array('nombre', 'length', 'max'=>256),
			array('estado', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idbodega, nombre, estado', 'safe', 'on'=>'search'),
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
			'pedidosproveedoresentradasalmacens' => array(self::HAS_MANY, 'Pedidosproveedoresentradasalmacen', 'bodega_idbodega'),
			'pedidosproveedoresitemdetallereservas' => array(self::HAS_MANY, 'Pedidosproveedoresitemdetallereserva', 'bodega_idbodega'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idbodega' => 'Idbodega',
			'nombre' => 'Nombre',
			'estado' => 'Estado',
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

		$criteria->compare('idbodega',$this->idbodega);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('estado',$this->estado,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}