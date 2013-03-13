<?php

/**
 * This is the model class for table "view_bodegareservasestrellasciudad".
 *
 * The followings are the available columns in table 'view_bodegareservasestrellasciudad':
 * @property integer $idbodegareservasestrellas
 * @property string $idreservasestrellascategoriaeditorial
 * @property integer $bodega_idbodega
 * @property integer $cantidadbodega
 * @property integer $prioridadbodega
 * @property integer $ciudad_idciudad
 * @property integer $cantidadreserva
 * @property integer $prioridadreserva
 * @property string $nombrebodega
 * @property string $nombreciudad
 */
class ViewBodegareservasestrellasciudad extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ViewBodegareservasestrellasciudad the static model class
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
		return 'view_bodegareservasestrellasciudad';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idreservasestrellascategoriaeditorial, bodega_idbodega, cantidadbodega, prioridadbodega, ciudad_idciudad, cantidadreserva, prioridadreserva, nombrebodega', 'required'),
			array('idbodegareservasestrellas, bodega_idbodega, cantidadbodega, prioridadbodega, ciudad_idciudad, cantidadreserva, prioridadreserva', 'numerical', 'integerOnly'=>true),
			array('idreservasestrellascategoriaeditorial', 'length', 'max'=>20),
			array('nombrebodega', 'length', 'max'=>256),
			array('nombreciudad', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idbodegareservasestrellas, idreservasestrellascategoriaeditorial, bodega_idbodega, cantidadbodega, prioridadbodega, ciudad_idciudad, cantidadreserva, prioridadreserva, nombrebodega, nombreciudad', 'safe', 'on'=>'search'),
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
			'idbodegareservasestrellas' => 'Idbodegareservasestrellas',
			'idreservasestrellascategoriaeditorial' => 'Idreservasestrellascategoriaeditorial',
			'bodega_idbodega' => 'Bodega Idbodega',
			'cantidadbodega' => 'Cantidadbodega',
			'prioridadbodega' => 'Prioridadbodega',
			'ciudad_idciudad' => 'Ciudad Idciudad',
			'cantidadreserva' => 'Cantidadreserva',
			'prioridadreserva' => 'Prioridadreserva',
			'nombrebodega' => 'Nombrebodega',
			'nombreciudad' => 'Nombreciudad',
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

		$criteria->compare('idbodegareservasestrellas',$this->idbodegareservasestrellas);
		$criteria->compare('idreservasestrellascategoriaeditorial',$this->idreservasestrellascategoriaeditorial,true);
		$criteria->compare('bodega_idbodega',$this->bodega_idbodega);
		$criteria->compare('cantidadbodega',$this->cantidadbodega);
		$criteria->compare('prioridadbodega',$this->prioridadbodega);
		$criteria->compare('ciudad_idciudad',$this->ciudad_idciudad);
		$criteria->compare('cantidadreserva',$this->cantidadreserva);
		$criteria->compare('prioridadreserva',$this->prioridadreserva);
		$criteria->compare('nombrebodega',$this->nombrebodega,true);
		$criteria->compare('nombreciudad',$this->nombreciudad,true);

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