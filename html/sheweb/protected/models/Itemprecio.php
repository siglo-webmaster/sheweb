<?php

/**
 * This is the model class for table "itemprecio".
 *
 * The followings are the available columns in table 'itemprecio':
 * @property string $iditemprecio
 * @property integer $item_iditem
 * @property integer $moneda_idmoneda
 * @property string $precio
 *
 * The followings are the available model relations:
 * @property Item $itemIditem
 * @property Moneda $monedaIdmoneda
 */
class Itemprecio extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Itemprecio the static model class
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
		return 'itemprecio';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('item_iditem, moneda_idmoneda, precio', 'required'),
			array('item_iditem, moneda_idmoneda', 'numerical', 'integerOnly'=>true),
			array('precio', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('iditemprecio, item_iditem, moneda_idmoneda, precio', 'safe', 'on'=>'search'),
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
			'itemIditem' => array(self::BELONGS_TO, 'Item', 'item_iditem'),
			'monedaIdmoneda' => array(self::BELONGS_TO, 'Moneda', 'moneda_idmoneda'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'iditemprecio' => 'Iditemprecio',
			'item_iditem' => 'Item Iditem',
			'moneda_idmoneda' => 'Moneda Idmoneda',
			'precio' => 'Precio',
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

		$criteria->compare('iditemprecio',$this->iditemprecio,true);
		$criteria->compare('item_iditem',$this->item_iditem);
		$criteria->compare('moneda_idmoneda',$this->moneda_idmoneda);
		$criteria->compare('precio',$this->precio,true);

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