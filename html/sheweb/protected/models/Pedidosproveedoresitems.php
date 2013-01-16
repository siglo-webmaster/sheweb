<?php

/**
 * This is the model class for table "pedidosproveedoresitems".
 *
 * The followings are the available columns in table 'pedidosproveedoresitems':
 * @property integer $idpedidosproveedoresitems
 * @property integer $pedidosproveedores_idpedidosproveedores
 * @property integer $item_iditem
 * @property integer $solicitado
 * @property integer $confirmado
 * @property integer $recibido
 * @property string $estado
 * @property integer $condicioncomercial_idcondicioncomercial
 *
 * The followings are the available model relations:
 * @property Pedidosproveedoresitemdetallereserva[] $pedidosproveedoresitemdetallereservas
 * @property Condicioncomercial $condicioncomercialIdcondicioncomercial
 * @property Item $itemIditem
 * @property Pedidosproveedores $pedidosproveedoresIdpedidosproveedores
 */
class Pedidosproveedoresitems extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Pedidosproveedoresitems the static model class
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
		return 'pedidosproveedoresitems';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pedidosproveedores_idpedidosproveedores, item_iditem, condicioncomercial_idcondicioncomercial', 'required'),
			array('pedidosproveedores_idpedidosproveedores, item_iditem, solicitado, confirmado, recibido, condicioncomercial_idcondicioncomercial', 'numerical', 'integerOnly'=>true),
			array('estado', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idpedidosproveedoresitems, pedidosproveedores_idpedidosproveedores, item_iditem, solicitado, confirmado, recibido, estado, condicioncomercial_idcondicioncomercial', 'safe', 'on'=>'search'),
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
			'pedidosproveedoresitemdetallereservas' => array(self::HAS_MANY, 'Pedidosproveedoresitemdetallereserva', 'pedidosproveedoresitems_idpedidosproveedoresitems'),
			'condicioncomercialIdcondicioncomercial' => array(self::BELONGS_TO, 'Condicioncomercial', 'condicioncomercial_idcondicioncomercial'),
			'itemIditem' => array(self::BELONGS_TO, 'Item', 'item_iditem'),
			'pedidosproveedoresIdpedidosproveedores' => array(self::BELONGS_TO, 'Pedidosproveedores', 'pedidosproveedores_idpedidosproveedores'),
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
			'confirmado' => 'Confirmado',
			'recibido' => 'Recibido',
			'estado' => 'Estado',
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

		$criteria->compare('idpedidosproveedoresitems',$this->idpedidosproveedoresitems);
		$criteria->compare('pedidosproveedores_idpedidosproveedores',$this->pedidosproveedores_idpedidosproveedores);
		$criteria->compare('item_iditem',$this->item_iditem);
		$criteria->compare('solicitado',$this->solicitado);
		$criteria->compare('confirmado',$this->confirmado);
		$criteria->compare('recibido',$this->recibido);
		$criteria->compare('estado',$this->estado,true);
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