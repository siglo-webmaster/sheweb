<?php

/**
 * This is the model class for table "item_has_tipoitematributos".
 *
 * The followings are the available columns in table 'item_has_tipoitematributos':
 * @property string $iditem_has_tipoitematributos
 * @property integer $item_iditem
 * @property integer $tipoitematributos_idtipoitematributos
 * @property string $valor
 *
 * The followings are the available model relations:
 * @property Item $itemIditem
 * @property Tipoitematributos $tipoitematributosIdtipoitematributos
 */
class ItemHasTipoitematributos extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ItemHasTipoitematributos the static model class
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
		return 'item_has_tipoitematributos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('item_iditem, tipoitematributos_idtipoitematributos', 'required'),
			array('item_iditem, tipoitematributos_idtipoitematributos', 'numerical', 'integerOnly'=>true),
			array('valor', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('iditem_has_tipoitematributos, item_iditem, tipoitematributos_idtipoitematributos, valor', 'safe', 'on'=>'search'),
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
			'tipoitematributosIdtipoitematributos' => array(self::BELONGS_TO, 'Tipoitematributos', 'tipoitematributos_idtipoitematributos'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'iditem_has_tipoitematributos' => 'Iditem Has Tipoitematributos',
			'item_iditem' => 'Item Iditem',
			'tipoitematributos_idtipoitematributos' => 'Tipoitematributos Idtipoitematributos',
			'valor' => 'Valor',
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

		$criteria->compare('iditem_has_tipoitematributos',$this->iditem_has_tipoitematributos,true);
		$criteria->compare('item_iditem',$this->item_iditem);
		$criteria->compare('tipoitematributos_idtipoitematributos',$this->tipoitematributos_idtipoitematributos);
		$criteria->compare('valor',$this->valor,true);

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