<?php

/**
 * This is the model class for table "view_pedidosproveedoresitemsagrupado".
 *
 * The followings are the available columns in table 'view_pedidosproveedoresitemsagrupado':
 * @property integer $idpedidosproveedoresitems
 * @property integer $pedidosproveedores_idpedidosproveedores
 * @property integer $item_iditem
 * @property integer $solicitado
 * @property integer $recibido
 * @property string $reservado
 */
class ViewPedidosproveedoresitemsagrupado extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ViewPedidosproveedoresitemsagrupado the static model class
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
		return 'view_pedidosproveedoresitemsagrupado';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pedidosproveedores_idpedidosproveedores, item_iditem', 'required'),
			array('idpedidosproveedoresitems, pedidosproveedores_idpedidosproveedores, item_iditem, solicitado, recibido', 'numerical', 'integerOnly'=>true),
			array('reservado', 'length', 'max'=>32),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idpedidosproveedoresitems, pedidosproveedores_idpedidosproveedores, item_iditem, solicitado, recibido, reservado', 'safe', 'on'=>'search'),
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
			'idpedidosproveedoresitems' => 'Idpedidosproveedoresitems',
			'pedidosproveedores_idpedidosproveedores' => 'Pedidosproveedores Idpedidosproveedores',
			'item_iditem' => 'Item Iditem',
			'solicitado' => 'Solicitado',
			'recibido' => 'Recibido',
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

		$criteria->compare('idpedidosproveedoresitems',$this->idpedidosproveedoresitems);
		$criteria->compare('pedidosproveedores_idpedidosproveedores',$this->pedidosproveedores_idpedidosproveedores);
		$criteria->compare('item_iditem',$this->item_iditem);
		$criteria->compare('solicitado',$this->solicitado);
		$criteria->compare('recibido',$this->recibido);
		$criteria->compare('reservado',$this->reservado,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}