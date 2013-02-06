<?php

/**
 * This is the model class for table "terceros".
 *
 * The followings are the available columns in table 'terceros':
 * @property integer $idterceros
 * @property integer $tiposidentificacion_idtiposidentificacion
 * @property integer $ciudad_idciudad
 * @property string $identificacion
 * @property string $nombre
 * @property string $telefono
 * @property string $email
 * @property string $contacto
 * @property string $telefonocontacto
 * @property string $direccion
 * @property string $estado
 *
 * The followings are the available model relations:
 * @property Item[] $items
 * @property Pedidosproveedores[] $pedidosproveedores
 * @property Ciudad $ciudadIdciudad
 * @property Tiposidentificacion $tiposidentificacionIdtiposidentificacion
 * @property Tiposterceros[] $tiposterceroses
 */
class Terceros extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Terceros the static model class
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
		return 'terceros';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tiposidentificacion_idtiposidentificacion, ciudad_idciudad, nombre, identificacion, telefono, contacto, telefonocontacto, direccion, email', 'required'),
			array('tiposidentificacion_idtiposidentificacion, ciudad_idciudad', 'numerical', 'integerOnly'=>true),
			array('identificacion, nombre, telefono, telefonocontacto, estado', 'length', 'max'=>45),
			array('email, contacto, direccion', 'length', 'max'=>128),
                        array('email', 'email','checkMX'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idterceros, tiposidentificacion_idtiposidentificacion, ciudad_idciudad, identificacion, nombre, telefono, email, contacto, telefonocontacto, direccion, estado', 'safe', 'on'=>'search'),
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
			'items' => array(self::MANY_MANY, 'Item', 'item_has_terceros(terceros_idterceros, item_iditem)'),
			'pedidosproveedores' => array(self::HAS_MANY, 'Pedidosproveedores', 'idproveedor'),
			'ciudadIdciudad' => array(self::BELONGS_TO, 'Ciudad', 'ciudad_idciudad'),
			'tiposidentificacionIdtiposidentificacion' => array(self::BELONGS_TO, 'Tiposidentificacion', 'tiposidentificacion_idtiposidentificacion'),
			'tiposterceroses' => array(self::MANY_MANY, 'Tiposterceros', 'terceros_has_tiposterceros(terceros_idterceros, tiposterceros_idtiposterceros)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idterceros' => 'Idterceros',
			'tiposidentificacion_idtiposidentificacion' => 'Tiposidentificacion Idtiposidentificacion',
			'ciudad_idciudad' => 'Ciudad Idciudad',
			'identificacion' => 'Identificacion',
                        'nombre' => 'Nombre',
			'telefono' => 'Telefono',
			'email' => 'Email',
			'contacto' => 'Contacto',
			'telefonocontacto' => 'Telefonocontacto',
			'direccion' => 'Direccion',
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

		$criteria->compare('idterceros',$this->idterceros);
		$criteria->compare('tiposidentificacion_idtiposidentificacion',$this->tiposidentificacion_idtiposidentificacion);
		$criteria->compare('ciudad_idciudad',$this->ciudad_idciudad);
		$criteria->compare('identificacion',$this->identificacion,true);
                $criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('contacto',$this->contacto,true);
		$criteria->compare('telefonocontacto',$this->telefonocontacto,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('estado',$this->estado,true);

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