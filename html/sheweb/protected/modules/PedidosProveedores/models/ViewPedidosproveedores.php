<?php

/**
 * This is the model class for table "view_pedidosproveedores".
 *
 * The followings are the available columns in table 'view_pedidosproveedores':
 * @property integer $idpedidosproveedores
 * @property integer $usuariocreacion
 * @property string $usernamecreacion
 * @property integer $usuarioaprobacion
 * @property string $usernameaprobacion
 * @property integer $idproveedor
 * @property string $nombreproveedor
 * @property integer $moneda_idmoneda
 * @property string $nombremoneda
 * @property string $fechacreacion
 * @property string $fechacierre
 * @property string $fechaaprobacion
 * @property string $fechaentrada
 * @property string $fechaliberacion
 * @property string $descripcion
 * @property string $observaciones
 * @property string $estado
 */
class ViewPedidosproveedores extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ViewPedidosproveedores the static model class
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
		return 'view_pedidosproveedores';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idproveedor, nombreproveedor, moneda_idmoneda', 'required'),
			array('idpedidosproveedores, usuariocreacion, usuarioaprobacion, idproveedor, moneda_idmoneda', 'numerical', 'integerOnly'=>true),
			array('usernamecreacion, usernameaprobacion, nombremoneda, estado', 'length', 'max'=>45),
			array('nombreproveedor', 'length', 'max'=>255),
			array('fechacreacion, fechacierre, fechaaprobacion, fechaentrada, fechaliberacion, descripcion, observaciones', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idpedidosproveedores, usuariocreacion, usernamecreacion, usuarioaprobacion, usernameaprobacion, idproveedor, nombreproveedor, moneda_idmoneda, nombremoneda, fechacreacion, fechacierre, fechaaprobacion, fechaentrada, fechaliberacion, descripcion, observaciones, estado', 'safe', 'on'=>'search'),
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
			'idpedidosproveedores' => 'Idpedidosproveedores',
			'usuariocreacion' => 'Usuariocreacion',
			'usernamecreacion' => 'Usernamecreacion',
			'usuarioaprobacion' => 'Usuarioaprobacion',
			'usernameaprobacion' => 'Usernameaprobacion',
			'idproveedor' => 'Idproveedor',
			'nombreproveedor' => 'Nombreproveedor',
			'moneda_idmoneda' => 'Moneda Idmoneda',
			'nombremoneda' => 'Nombremoneda',
			'fechacreacion' => 'Fechacreacion',
			'fechacierre' => 'Fechacierre',
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
		$criteria->compare('usernamecreacion',$this->usernamecreacion,true);
		$criteria->compare('usuarioaprobacion',$this->usuarioaprobacion);
		$criteria->compare('usernameaprobacion',$this->usernameaprobacion,true);
		$criteria->compare('idproveedor',$this->idproveedor);
		$criteria->compare('nombreproveedor',$this->nombreproveedor,true);
		$criteria->compare('moneda_idmoneda',$this->moneda_idmoneda);
		$criteria->compare('nombremoneda',$this->nombremoneda,true);
		$criteria->compare('fechacreacion',$this->fechacreacion,true);
		$criteria->compare('fechacierre',$this->fechacierre,true);
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