<?php

/**
 * This is the model class for table "item_has_tipoformato".
 *
 * The followings are the available columns in table 'item_has_tipoformato':
 * @property integer $item_iditem
 * @property integer $tipoformato_idtipoformato
 */
class ItemHasTipoformato extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ItemHasTipoformato the static model class
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
		return 'item_has_tipoformato';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('item_iditem, tipoformato_idtipoformato', 'required'),
			array('item_iditem, tipoformato_idtipoformato', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('item_iditem, tipoformato_idtipoformato', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'item_iditem' => 'Item Iditem',
			'tipoformato_idtipoformato' => 'Tipoformato Idtipoformato',
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

		$criteria->compare('item_iditem',$this->item_iditem);
		$criteria->compare('tipoformato_idtipoformato',$this->tipoformato_idtipoformato);

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