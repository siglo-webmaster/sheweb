<?php

/**
 * This is the model class for table "view_pedidosproveedoresitemscorto".
 *
 * The followings are the available columns in table 'view_pedidosproveedoresitemscorto':
 * @property integer $idppi
 * @property integer $idpp
 * @property integer $iditem
 * @property string $nombre
 * @property integer $solicitado
 * @property integer $recibido
 * @property string $estado
 */
class ViewPedidosproveedoresitemscorto extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ViewPedidosproveedoresitemscorto the static model class
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
		return 'view_pedidosproveedoresitemscorto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idpp, iditem', 'required'),
			array('idppi, idpp, iditem, solicitado, recibido', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>512),
			array('estado', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idppi, idpp, iditem, nombre, solicitado, recibido, estado', 'safe', 'on'=>'search'),
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
			'idppi' => 'Idppi',
			'idpp' => 'Idpp',
			'iditem' => 'Iditem',
			'nombre' => 'Nombre',
			'solicitado' => 'Solicitado',
			'recibido' => 'Recibido',
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

		$criteria->compare('idppi',$this->idppi);
		$criteria->compare('idpp',$this->idpp);
		$criteria->compare('iditem',$this->iditem);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('solicitado',$this->solicitado);
		$criteria->compare('recibido',$this->recibido);
		$criteria->compare('estado',$this->estado,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}