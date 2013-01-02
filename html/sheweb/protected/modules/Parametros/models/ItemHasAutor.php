<?php

/**
 * This is the model class for table "item_has_autor".
 *
 * The followings are the available columns in table 'item_has_autor':
 * @property integer $item_iditem
 * @property integer $autor_idautor
 */
class ItemHasAutor extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ItemHasAutor the static model class
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
		return 'item_has_autor';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('item_iditem, autor_idautor', 'required'),
			array('item_iditem, autor_idautor', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('item_iditem, autor_idautor', 'safe', 'on'=>'search'),
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
			'autor_idautor' => 'Autor Idautor',
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
		$criteria->compare('autor_idautor',$this->autor_idautor);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}