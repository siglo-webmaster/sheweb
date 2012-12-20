<?php

/**
 * This is the model class for table "pedidosproveedores".
 *
 * The followings are the available columns in table 'pedidosproveedores':
 * @property integer $idpedidosproveedores
 * @property integer $usuariocreacion
 * @property integer $usuarioaprobacion
 * @property integer $idproveedor
 * @property integer $moneda_idmoneda
 * @property string $fechacreacion
 * @property string $fechacierre
 * @property string $fechaestimada
 * @property string $fechaaprobacion
 * @property string $fechaentrada
 * @property string $fechaliberacion
 * @property string $descripcion
 * @property string $observaciones
 * @property string $estado
 *
 * The followings are the available model relations:
 * @property Pedidosprovedoresdocumentos[] $pedidosprovedoresdocumentoses
 * @property Moneda $monedaIdmoneda
 * @property Terceros $idproveedor0
 * @property Usuarios $usuariocreacion0
 * @property Usuarios $usuarioaprobacion0
 * @property Pedidosproveedoresentradasalmacen[] $pedidosproveedoresentradasalmacens
 * @property Pedidosproveedoresentradasalmacen[] $pedidosproveedoresentradasalmacens1
 * @property Pedidosproveedoresitems[] $pedidosproveedoresitems
 */
class Pedidosproveedores extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Pedidosproveedores the static model class
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
		return 'pedidosproveedores';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idproveedor, moneda_idmoneda', 'required'),
			array('usuariocreacion, usuarioaprobacion, idproveedor, moneda_idmoneda', 'numerical', 'integerOnly'=>true),
			array('estado', 'length', 'max'=>45),
			array('fechacreacion, fechacierre, fechaestimada, fechaaprobacion, fechaentrada, fechaliberacion, descripcion, observaciones', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idpedidosproveedores, usuariocreacion, usuarioaprobacion, idproveedor, moneda_idmoneda, fechacreacion, fechacierre, fechaestimada, fechaaprobacion, fechaentrada, fechaliberacion, descripcion, observaciones, estado', 'safe', 'on'=>'search'),
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
			'pedidosprovedoresdocumentoses' => array(self::HAS_MANY, 'Pedidosprovedoresdocumentos', 'pedidosproveedores_idpedidosproveedores'),
			'monedaIdmoneda' => array(self::BELONGS_TO, 'Moneda', 'moneda_idmoneda'),
			'idproveedor0' => array(self::BELONGS_TO, 'Terceros', 'idproveedor'),
			'usuariocreacion0' => array(self::BELONGS_TO, 'Usuarios', 'usuariocreacion'),
			'usuarioaprobacion0' => array(self::BELONGS_TO, 'Usuarios', 'usuarioaprobacion'),
			'pedidosproveedoresentradasalmacens' => array(self::MANY_MANY, 'Pedidosproveedoresentradasalmacen', 'pedidosproveedores_has_pedidosproveedoresentradasalmacen(idpedidosproveedores, idpedidosproveedoresentradasalmacen)'),
			'pedidosproveedoresentradasalmacens1' => array(self::HAS_MANY, 'Pedidosproveedoresentradasalmacen', 'pedidosproveedores_idpedidosproveedores'),
			'pedidosproveedoresitems' => array(self::HAS_MANY, 'Pedidosproveedoresitems', 'pedidosproveedores_idpedidosproveedores'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idpedidosproveedores' => 'Idpedidosproveedores',
			'usuariocreacion' => 'Usuariocreacion',
			'usuarioaprobacion' => 'Usuarioaprobacion',
			'idproveedor' => 'Idproveedor',
			'moneda_idmoneda' => 'Moneda Idmoneda',
			'fechacreacion' => 'Fechacreacion',
			'fechacierre' => 'Fechacierre',
			'fechaestimada' => 'Fechaestimada',
			'fechaaprobacion' => 'Fechaaprobacion',
			'fechaentrada' => 'Fechaentrada',
			'fechaliberacion' => 'Fechaliberacion',
			'descripcion' => 'Descripcion',
			'observaciones' => 'Observaciones',
			'estado' => 'Estado',
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

		$criteria->compare('idpedidosproveedores',$this->idpedidosproveedores);
		$criteria->compare('usuariocreacion',$this->usuariocreacion);
		$criteria->compare('usuarioaprobacion',$this->usuarioaprobacion);
		$criteria->compare('idproveedor',$this->idproveedor);
		$criteria->compare('moneda_idmoneda',$this->moneda_idmoneda);
		$criteria->compare('fechacreacion',$this->fechacreacion,true);
		$criteria->compare('fechacierre',$this->fechacierre,true);
		$criteria->compare('fechaestimada',$this->fechaestimada,true);
		$criteria->compare('fechaaprobacion',$this->fechaaprobacion,true);
		$criteria->compare('fechaentrada',$this->fechaentrada,true);
		$criteria->compare('fechaliberacion',$this->fechaliberacion,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('observaciones',$this->observaciones,true);
		$criteria->compare('estado',$this->estado,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}