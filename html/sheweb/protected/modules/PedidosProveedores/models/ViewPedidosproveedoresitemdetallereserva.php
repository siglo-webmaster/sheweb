<?php

/**
 * This is the model class for table "view_pedidosproveedoresitemdetallereserva".
 *
 * The followings are the available columns in table 'view_pedidosproveedoresitemdetallereserva':
 * @property integer $idpedidosproveedoresitemdetallereserva
 * @property integer $usuarios_idusuarios
 * @property string $username
 * @property integer $bodega_idbodega
 * @property string $nombrebodega
 * @property integer $reservado
 * @property integer $solicitado
 * @property integer $idpedidosproveedoresitems
 * @property integer $item_iditem
 * @property string $nombre
 */
class ViewPedidosproveedoresitemdetallereserva extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ViewPedidosproveedoresitemdetallereserva the static model class
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
		return 'view_pedidosproveedoresitemdetallereserva';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('usuarios_idusuarios, username, bodega_idbodega, nombrebodega, item_iditem', 'required'),
			array('idpedidosproveedoresitemdetallereserva, usuarios_idusuarios, bodega_idbodega, reservado, solicitado, idpedidosproveedoresitems, item_iditem', 'numerical', 'integerOnly'=>true),
			array('username', 'length', 'max'=>45),
			array('nombrebodega', 'length', 'max'=>256),
			array('nombre', 'length', 'max'=>512),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idpedidosproveedoresitemdetallereserva, usuarios_idusuarios, username, bodega_idbodega, nombrebodega, reservado, solicitado, idpedidosproveedoresitems, item_iditem, nombre', 'safe', 'on'=>'search'),
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
			'idpedidosproveedoresitemdetallereserva' => 'Idpedidosproveedoresitemdetallereserva',
			'usuarios_idusuarios' => 'Usuarios Idusuarios',
			'username' => 'Username',
			'bodega_idbodega' => 'Bodega Idbodega',
			'nombrebodega' => 'Nombrebodega',
			'reservado' => 'Reservado',
			'solicitado' => 'Solicitado',
			'idpedidosproveedoresitems' => 'Idpedidosproveedoresitems',
			'item_iditem' => 'Item Iditem',
			'nombre' => 'Nombre',
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
		$criteria->compare('usuarios_idusuarios',$this->usuarios_idusuarios);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('bodega_idbodega',$this->bodega_idbodega);
		$criteria->compare('nombrebodega',$this->nombrebodega,true);
		$criteria->compare('reservado',$this->reservado);
		$criteria->compare('solicitado',$this->solicitado);
		$criteria->compare('idpedidosproveedoresitems',$this->idpedidosproveedoresitems);
		$criteria->compare('item_iditem',$this->item_iditem);
		$criteria->compare('nombre',$this->nombre,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}