<?php

/**
 * This is the model class for table "pedidosproveedoresdocumentos".
 *
 * The followings are the available columns in table 'pedidosproveedoresdocumentos':
 * @property integer $idpedidosproveedoresdocumentos
 * @property integer $pedidosproveedores_idpedidosproveedores
 * @property string $url
 *
 * The followings are the available model relations:
 * @property Pedidosproveedores $pedidosproveedoresIdpedidosproveedores
 */
class Pedidosproveedoresdocumentos extends CActiveRecord
{
        public $url;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Pedidosproveedoresdocumentos the static model class
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
		return 'pedidosproveedoresdocumentos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
            
		return array(
			array('pedidosproveedores_idpedidosproveedores, url', 'required'),
			array('pedidosproveedores_idpedidosproveedores', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idpedidosproveedoresdocumentos, pedidosproveedores_idpedidosproveedores, url', 'safe', 'on'=>'search'),
                        array('url', 'file', 'types'=>'jpg, gif, png'),
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
			'pedidosproveedoresIdpedidosproveedores' => array(self::BELONGS_TO, 'Pedidosproveedores', 'pedidosproveedores_idpedidosproveedores'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idpedidosproveedoresdocumentos' => 'Idpedidosproveedoresdocumentos',
			'pedidosproveedores_idpedidosproveedores' => 'Pedidosproveedores Idpedidosproveedores',
			'url' => 'Url',
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

		$criteria->compare('idpedidosproveedoresdocumentos',$this->idpedidosproveedoresdocumentos);
		$criteria->compare('pedidosproveedores_idpedidosproveedores',$this->pedidosproveedores_idpedidosproveedores);
		$criteria->compare('url',$this->url,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}