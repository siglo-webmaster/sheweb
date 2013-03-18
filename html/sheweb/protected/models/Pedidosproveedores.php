<?php

/**
 * This is the model class for table "pedidosproveedores".
 *
 * The followings are the available columns in table 'pedidosproveedores':
 * @property integer $idpedidosproveedores
 * @property string $usuariocreacion
 * @property string $usuarioaprobacion
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
 * @property integer $tipopedidosproveedores_idtipopedidosproveedores
 * @property integer $tipostransporte_idtipostransporte
 *
 * The followings are the available model relations:
 * @property Tipopedidosproveedores $tipopedidosproveedoresIdtipopedidosproveedores
 * @property Tipostransporte $tipostransporteIdtipostransporte
 * @property Moneda $monedaIdmoneda
 * @property Terceros $idproveedor0
 * @property UsergroupsUser $usuarioaprobacion0
 * @property UsergroupsUser $usuariocreacion0
 * @property Pedidosproveedoresentradasalmacen[] $pedidosproveedoresentradasalmacens
 * @property Pedidosproveedoresdocumentos[] $pedidosproveedoresdocumentoses
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
			array('idproveedor, moneda_idmoneda, tipopedidosproveedores_idtipopedidosproveedores, tipostransporte_idtipostransporte, fechacierre, fechaestimada', 'required'),
			array('idproveedor, moneda_idmoneda, tipopedidosproveedores_idtipopedidosproveedores, tipostransporte_idtipostransporte', 'numerical', 'integerOnly'=>true),
			array('usuariocreacion, usuarioaprobacion', 'length', 'max'=>20),
			array('estado', 'length', 'max'=>45),
			array('fechacreacion, fechacierre, fechaestimada, fechaaprobacion, fechaentrada, fechaliberacion, descripcion, observaciones', 'safe'),
                        array('fechaestimada','verificarFechaEstimada'),
                        array('fechacierre','verificarFechaCierre'),
                            
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idpedidosproveedores, usuariocreacion, usuarioaprobacion, idproveedor, moneda_idmoneda, fechacreacion, fechacierre, fechaestimada, fechaaprobacion, fechaentrada, fechaliberacion, descripcion, observaciones, estado, tipopedidosproveedores_idtipopedidosproveedores, tipostransporte_idtipostransporte', 'safe', 'on'=>'search'),
		);
	}

        public function verificarFechaEstimada(){
            if( strtotime($this->fechacierre) > strtotime($this->fechaestimada) ) 
                $this->addError('fechaestimada', 'La fecha de cierre debe ser menor que la fecha estimada de llegada');
        }
        
        public function verificarFechaCierre(){
            if( strtotime($this->fechacierre) <= strtotime(date('Y-m-d')) ) 
                $this->addError('fechacierre', 'La fecha de cierre debe ser mayor que la fecha actual');
        }
        
        
	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'tipopedidosproveedoresIdtipopedidosproveedores' => array(self::BELONGS_TO, 'Tipopedidosproveedores', 'tipopedidosproveedores_idtipopedidosproveedores'),
			'tipostransporteIdtipostransporte' => array(self::BELONGS_TO, 'Tipostransporte', 'tipostransporte_idtipostransporte'),
			'monedaIdmoneda' => array(self::BELONGS_TO, 'Moneda', 'moneda_idmoneda'),
			'idproveedor0' => array(self::BELONGS_TO, 'Terceros', 'idproveedor'),
			'usuarioaprobacion0' => array(self::BELONGS_TO, 'UsergroupsUser', 'usuarioaprobacion'),
			'usuariocreacion0' => array(self::BELONGS_TO, 'UsergroupsUser', 'usuariocreacion'),
			'pedidosproveedoresentradasalmacens' => array(self::MANY_MANY, 'Pedidosproveedoresentradasalmacen', 'pedidosproveedores_has_pedidosproveedoresentradasalmacen(idpedidosproveedores, idpedidosproveedoresentradasalmacen)'),
			'pedidosproveedoresdocumentoses' => array(self::HAS_MANY, 'Pedidosproveedoresdocumentos', 'pedidosproveedores_idpedidosproveedores'),
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
			'idpedidosproveedores' => 'Pedido #',
			'usuariocreacion' => 'Creado por',
			'usuarioaprobacion' => 'Aprobado por',
			'idproveedor' => 'Proveedor',
			'moneda_idmoneda' => 'Moneda',
			'fechacreacion' => 'Fechade creacion',
			'fechacierre' => 'Fecha cierre',
			'fechaestimada' => 'Fecha llegada',
			'fechaaprobacion' => 'Fecha aprobacion',
			'fechaentrada' => 'Fecha entrada',
			'fechaliberacion' => 'Fecha liberacion',
			'descripcion' => 'Descripcion',
			'observaciones' => 'Observaciones',
			'estado' => 'Estado',
			'tipopedidosproveedores_idtipopedidosproveedores' => 'Tipo',
			'tipostransporte_idtipostransporte' => 'Transporte',
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
		$criteria->compare('usuariocreacion',$this->usuariocreacion,true);
		$criteria->compare('usuarioaprobacion',$this->usuarioaprobacion,true);
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
		$criteria->compare('tipopedidosproveedores_idtipopedidosproveedores',$this->tipopedidosproveedores_idtipopedidosproveedores);
		$criteria->compare('tipostransporte_idtipostransporte',$this->tipostransporte_idtipostransporte);

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