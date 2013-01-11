<?php

/**
 * This is the model class for table "proyectosespeciales".
 *
 * The followings are the available columns in table 'proyectosespeciales':
 * @property integer $idproyectosespeciales
 * @property integer $idcliente
 * @property string $idusuariocreacion
 * @property string $nombre
 * @property string $fechainicio
 * @property string $fechacierre
 * @property string $observaciones
 * @property string $estado
 * @property integer $moneda_idmoneda
 *
 * The followings are the available model relations:
 * @property Pedidosproveedoresitemdetallereserva[] $pedidosproveedoresitemdetallereservas
 * @property Moneda $monedaIdmoneda
 * @property Terceros $idcliente0
 * @property UsergroupsUser $idusuariocreacion0
 */
class Proyectosespeciales extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Proyectosespeciales the static model class
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
		return 'proyectosespeciales';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idcliente, idusuariocreacion, moneda_idmoneda', 'required'),
			array('idcliente, moneda_idmoneda', 'numerical', 'integerOnly'=>true),
			array('idusuariocreacion', 'length', 'max'=>20),
			array('nombre', 'length', 'max'=>255),
			array('estado', 'length', 'max'=>45),
			array('fechainicio, fechacierre, observaciones', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idproyectosespeciales, idcliente, idusuariocreacion, nombre, fechainicio, fechacierre, observaciones, estado, moneda_idmoneda', 'safe', 'on'=>'search'),
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
			'pedidosproveedoresitemdetallereservas' => array(self::HAS_MANY, 'Pedidosproveedoresitemdetallereserva', 'proyectosespeciales_idproyectosespeciales'),
			'monedaIdmoneda' => array(self::BELONGS_TO, 'Moneda', 'moneda_idmoneda'),
			'idcliente0' => array(self::BELONGS_TO, 'Terceros', 'idcliente'),
			'idusuariocreacion0' => array(self::BELONGS_TO, 'UsergroupsUser', 'idusuariocreacion'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idproyectosespeciales' => 'Idproyectosespeciales',
			'idcliente' => 'Idcliente',
			'idusuariocreacion' => 'Idusuariocreacion',
			'nombre' => 'Nombre',
			'fechainicio' => 'Fechainicio',
			'fechacierre' => 'Fechacierre',
			'observaciones' => 'Observaciones',
			'estado' => 'Estado',
			'moneda_idmoneda' => 'Moneda Idmoneda',
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

		$criteria->compare('idproyectosespeciales',$this->idproyectosespeciales);
		$criteria->compare('idcliente',$this->idcliente);
		$criteria->compare('idusuariocreacion',$this->idusuariocreacion,true);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('fechainicio',$this->fechainicio,true);
		$criteria->compare('fechacierre',$this->fechacierre,true);
		$criteria->compare('observaciones',$this->observaciones,true);
		$criteria->compare('estado',$this->estado,true);
		$criteria->compare('moneda_idmoneda',$this->moneda_idmoneda);

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