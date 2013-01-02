<?php

/**
 * This is the model class for table "pedidosproveedoresitemdetallereserva".
 *
 * The followings are the available columns in table 'pedidosproveedoresitemdetallereserva':
 * @property integer $idpedidosproveedoresitemdetallereserva
 * @property integer $pedidosproveedoresitems_idpedidosproveedoresitems
 * @property integer $usuarios_idusuarios
 * @property integer $bodega_idbodega
 * @property integer $reservado
 *
 * The followings are the available model relations:
 * @property Bodega $bodegaIdbodega
 * @property Pedidosproveedoresitems $pedidosproveedoresitemsIdpedidosproveedoresitems
 * @property Usuarios $usuariosIdusuarios
 */
class Pedidosproveedoresitemdetallereserva extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Pedidosproveedoresitemdetallereserva the static model class
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
		return 'pedidosproveedoresitemdetallereserva';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pedidosproveedoresitems_idpedidosproveedoresitems, usuarios_idusuarios, bodega_idbodega', 'required'),
			array('pedidosproveedoresitems_idpedidosproveedoresitems, usuarios_idusuarios, bodega_idbodega, reservado', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idpedidosproveedoresitemdetallereserva, pedidosproveedoresitems_idpedidosproveedoresitems, usuarios_idusuarios, bodega_idbodega, reservado', 'safe', 'on'=>'search'),
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
			'pedidosproveedoresitemsIdpedidosproveedoresitems' => array(self::BELONGS_TO, 'Pedidosproveedoresitems', 'pedidosproveedoresitems_idpedidosproveedoresitems'),
			'usuariosIdusuarios' => array(self::BELONGS_TO, 'Usuarios', 'usuarios_idusuarios'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idpedidosproveedoresitemdetallereserva' => 'Idpedidosproveedoresitemdetallereserva',
			'pedidosproveedoresitems_idpedidosproveedoresitems' => 'Pedidosproveedoresitems Idpedidosproveedoresitems',
			'usuarios_idusuarios' => 'Usuarios Idusuarios',
			'bodega_idbodega' => 'Bodega Idbodega',
			'reservado' => 'Reservado',
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

		$criteria->compare('idpedidosproveedoresitemdetallereserva',$this->idpedidosproveedoresitemdetallereserva);
		$criteria->compare('pedidosproveedoresitems_idpedidosproveedoresitems',$this->pedidosproveedoresitems_idpedidosproveedoresitems);
		$criteria->compare('usuarios_idusuarios',$this->usuarios_idusuarios);
		$criteria->compare('bodega_idbodega',$this->bodega_idbodega);
		$criteria->compare('reservado',$this->reservado);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}