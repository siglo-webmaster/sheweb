<?php

/**
 * This is the model class for table "categoria".
 *
 * The followings are the available columns in table 'categoria':
 * @property integer $idcategoria
 * @property integer $idcategoriapadre
 * @property string $nombre
 * @property integer $raiz
 *
 * The followings are the available model relations:
 * @property Categoria $idcategoriapadre0
 * @property Categoria[] $categorias
 * @property Item[] $items
 */
class Categoria extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Categoria the static model class
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
		return 'categoria';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('raiz', 'required'),
			array('idcategoriapadre, raiz', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idcategoria, idcategoriapadre, nombre, raiz', 'safe', 'on'=>'search'),
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
			'idcategoriapadre0' => array(self::BELONGS_TO, 'Categoria', 'idcategoriapadre'),
			'categorias' => array(self::HAS_MANY, 'Categoria', 'idcategoriapadre'),
			'items' => array(self::MANY_MANY, 'Item', 'item_has_categoria(categoria_idcategoria, item_iditem)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idcategoria' => 'Idcategoria',
			'idcategoriapadre' => 'Idcategoriapadre',
			'nombre' => 'Nombre',
			'raiz' => 'Raiz',
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

		$criteria->compare('idcategoria',$this->idcategoria);
		$criteria->compare('idcategoriapadre',$this->idcategoriapadre);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('raiz',$this->raiz);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}