<?php

/**
 * This is the model class for table "ciudad".
 *
 * The followings are the available columns in table 'ciudad':
 * @property integer $idciudad
 * @property integer $departamento_iddepartamento
 * @property string $nombre
 *
 * The followings are the available model relations:
 * @property Departamento $departamentoIddepartamento
 * @property Terceros[] $terceroses
 */
class Ciudad extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Ciudad the static model class
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
		return 'ciudad';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('departamento_iddepartamento', 'required'),
			array('departamento_iddepartamento', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idciudad, departamento_iddepartamento, nombre', 'safe', 'on'=>'search'),
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
			'departamentoIddepartamento' => array(self::BELONGS_TO, 'Departamento', 'departamento_iddepartamento'),
			'terceroses' => array(self::HAS_MANY, 'Terceros', 'ciudad_idciudad'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idciudad' => 'Idciudad',
			'departamento_iddepartamento' => 'Departamento Iddepartamento',
			'nombre' => 'Nombre',
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

		$criteria->compare('idciudad',$this->idciudad);
		$criteria->compare('departamento_iddepartamento',$this->departamento_iddepartamento);
		$criteria->compare('nombre',$this->nombre,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}