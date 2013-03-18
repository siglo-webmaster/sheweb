<?php

/**
 * This is the model class for table "pedidosproveedoresitems".
 *
 * The followings are the available columns in table 'pedidosproveedoresitems':
 * @property integer $idpedidosproveedoresitems
 * @property integer $pedidosproveedores_idpedidosproveedores
 * @property integer $condicioncomercial_idcondicioncomercial
 * @property integer $item_iditem
 * @property integer $solicitado
 * @property integer $confirmado
 * @property integer $recibido
 * @property integer $chekeado
 * @property string $estado
 * @property integer $proyectosespeciales_idproyectosespeciales
 *
 * The followings are the available model relations:
 * @property Pedidosproveedoresitemdetallereserva[] $pedidosproveedoresitemdetallereservas
 * @property Condicioncomercial $condicioncomercialIdcondicioncomercial
 * @property Item $itemIditem
 * @property Pedidosproveedores $pedidosproveedoresIdpedidosproveedores
 * @property Proyectosespeciales $proyectosespecialesIdproyectosespeciales
 * @property TempEntradasalmacendetalle[] $tempEntradasalmacendetalles
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
			array('pedidosproveedores_idpedidosproveedores, condicioncomercial_idcondicioncomercial, item_iditem, proyectosespeciales_idproyectosespeciales', 'required'),
			array('pedidosproveedores_idpedidosproveedores, condicioncomercial_idcondicioncomercial, item_iditem, solicitado, confirmado, recibido, chekeado, proyectosespeciales_idproyectosespeciales', 'numerical', 'integerOnly'=>true),
			array('estado', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idpedidosproveedoresitems, pedidosproveedores_idpedidosproveedores, condicioncomercial_idcondicioncomercial, item_iditem, solicitado, confirmado, recibido, chekeado, estado, proyectosespeciales_idproyectosespeciales', 'safe', 'on'=>'search'),
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
			'proyectosespecialesIdproyectosespeciales' => array(self::BELONGS_TO, 'Proyectosespeciales', 'proyectosespeciales_idproyectosespeciales'),
			'tempEntradasalmacendetalles' => array(self::HAS_MANY, 'TempEntradasalmacendetalle', 'pedidosproveedoresitems_idpedidosproveedoresitems'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idpedidosproveedoresitems' => 'id',
			'pedidosproveedores_idpedidosproveedores' => 'Pedido #',
			'condicioncomercial_idcondicioncomercial' => 'Condicioncomercial',
			'item_iditem' => 'Titulo',
			'solicitado' => 'Solicitado',
			'confirmado' => 'Confirmado',
			'recibido' => 'Recibido',
			'chekeado' => 'Chekeado',
			'estado' => 'Estado',
			'proyectosespeciales_idproyectosespeciales' => 'Proyecto',
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
		$criteria->compare('condicioncomercial_idcondicioncomercial',$this->condicioncomercial_idcondicioncomercial);
		$criteria->compare('item_iditem',$this->item_iditem);
		$criteria->compare('solicitado',$this->solicitado);
		$criteria->compare('confirmado',$this->confirmado);
		$criteria->compare('recibido',$this->recibido);
		$criteria->compare('chekeado',$this->chekeado);
		$criteria->compare('estado',$this->estado,true);
		$criteria->compare('proyectosespeciales_idproyectosespeciales',$this->proyectosespeciales_idproyectosespeciales);

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