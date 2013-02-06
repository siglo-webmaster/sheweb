<?php

/**
 * This is the model class for table "pedidosproveedoresentradasalmacendetalle".
 *
 * The followings are the available columns in table 'pedidosproveedoresentradasalmacendetalle':
 * @property integer $idpedidosproveedoresentradasalmacendetalle
 * @property integer $idpedidosproveedoresentradasalmacen
 * @property integer $item_iditem
 * @property integer $cantidad
 * @property integer $condicioncomercial_idcondicioncomercial
 *
 * The followings are the available model relations:
 * @property Condicioncomercial $condicioncomercialIdcondicioncomercial
 * @property Item $itemIditem
 * @property Pedidosproveedoresentradasalmacen $idpedidosproveedoresentradasalmacen0
 */
class Pedidosproveedoresentradasalmacendetalle extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Pedidosproveedoresentradasalmacendetalle the static model class
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
		return 'pedidosproveedoresentradasalmacendetalle';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idpedidosproveedoresentradasalmacen, item_iditem, condicioncomercial_idcondicioncomercial', 'required'),
			array('idpedidosproveedoresentradasalmacen, item_iditem, cantidad, condicioncomercial_idcondicioncomercial', 'numerical', 'integerOnly'=>true),
                        array('cantidad','numerical','integerOnly'=>true,'min'=>1,'tooSmall'=>'Debe ingresar al menos 1 producto'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idpedidosproveedoresentradasalmacendetalle, idpedidosproveedoresentradasalmacen, item_iditem, cantidad, condicioncomercial_idcondicioncomercial', 'safe', 'on'=>'search'),
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
			'condicioncomercialIdcondicioncomercial' => array(self::BELONGS_TO, 'Condicioncomercial', 'condicioncomercial_idcondicioncomercial'),
			'itemIditem' => array(self::BELONGS_TO, 'Item', 'item_iditem'),
			'idpedidosproveedoresentradasalmacen0' => array(self::BELONGS_TO, 'Pedidosproveedoresentradasalmacen', 'idpedidosproveedoresentradasalmacen'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idpedidosproveedoresentradasalmacendetalle' => 'Idpedidosproveedoresentradasalmacendetalle',
			'idpedidosproveedoresentradasalmacen' => 'Idpedidosproveedoresentradasalmacen',
			'item_iditem' => 'Item Iditem',
			'cantidad' => 'Cantidad',
			'condicioncomercial_idcondicioncomercial' => 'Condicioncomercial Idcondicioncomercial',
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

		$criteria->compare('idpedidosproveedoresentradasalmacendetalle',$this->idpedidosproveedoresentradasalmacendetalle);
		$criteria->compare('idpedidosproveedoresentradasalmacen',$this->idpedidosproveedoresentradasalmacen);
		$criteria->compare('item_iditem',$this->item_iditem);
		$criteria->compare('cantidad',$this->cantidad);
		$criteria->compare('condicioncomercial_idcondicioncomercial',$this->condicioncomercial_idcondicioncomercial);

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