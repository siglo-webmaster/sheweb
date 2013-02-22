<?php

/**
 * This is the model class for table "estrellascategoriaeditorial".
 *
 * The followings are the available columns in table 'estrellascategoriaeditorial':
 * @property string $idestrellascategoriaeditorial
 * @property integer $estrellas_idestrellas
 * @property integer $categoria_idcategoria
 * @property integer $editorial_ideditorial
 * @property integer $condicioncomercial_idcondicioncomercial
 * @property string $cantidad
 *
 * The followings are the available model relations:
 * @property Estrellas $estrellasIdestrellas
 * @property Categoria $categoriaIdcategoria
 * @property Editorial $editorialIdeditorial
 * @property Condicioncomercial $condicioncomercialIdcondicioncomercial
 * @property Reservasestrellascategoriaeditorial[] $reservasestrellascategoriaeditorials
 */
class Estrellascategoriaeditorial extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Estrellascategoriaeditorial the static model class
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
		return 'estrellascategoriaeditorial';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('estrellas_idestrellas, categoria_idcategoria, editorial_ideditorial, condicioncomercial_idcondicioncomercial', 'required'),
			array('estrellas_idestrellas, categoria_idcategoria, editorial_ideditorial, condicioncomercial_idcondicioncomercial', 'numerical', 'integerOnly'=>true),
			array('cantidad', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idestrellascategoriaeditorial, estrellas_idestrellas, categoria_idcategoria, editorial_ideditorial, condicioncomercial_idcondicioncomercial, cantidad', 'safe', 'on'=>'search'),
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
			'estrellasIdestrellas' => array(self::BELONGS_TO, 'Estrellas', 'estrellas_idestrellas'),
			'categoriaIdcategoria' => array(self::BELONGS_TO, 'Categoria', 'categoria_idcategoria'),
			'editorialIdeditorial' => array(self::BELONGS_TO, 'Editorial', 'editorial_ideditorial'),
			'condicioncomercialIdcondicioncomercial' => array(self::BELONGS_TO, 'Condicioncomercial', 'condicioncomercial_idcondicioncomercial'),
			'reservasestrellascategoriaeditorials' => array(self::HAS_MANY, 'Reservasestrellascategoriaeditorial', 'estrellascategoriaeditorial_idestrellascategoriaeditorial'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idestrellascategoriaeditorial' => 'Idestrellascategoriaeditorial',
			'estrellas_idestrellas' => 'Estrellas Idestrellas',
			'categoria_idcategoria' => 'Categoria Idcategoria',
			'editorial_ideditorial' => 'Editorial Ideditorial',
			'condicioncomercial_idcondicioncomercial' => 'Condicioncomercial Idcondicioncomercial',
			'cantidad' => 'Cantidad',
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

		$criteria->compare('idestrellascategoriaeditorial',$this->idestrellascategoriaeditorial,true);
		$criteria->compare('estrellas_idestrellas',$this->estrellas_idestrellas);
		$criteria->compare('categoria_idcategoria',$this->categoria_idcategoria);
		$criteria->compare('editorial_ideditorial',$this->editorial_ideditorial);
		$criteria->compare('condicioncomercial_idcondicioncomercial',$this->condicioncomercial_idcondicioncomercial);
		$criteria->compare('cantidad',$this->cantidad,true);

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