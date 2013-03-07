<?php

/**
 * This is the model class for table "view_estrellascategoriaeditorial".
 *
 * The followings are the available columns in table 'view_estrellascategoriaeditorial':
 * @property string $idestrellascategoriaeditorial
 * @property integer $estrellas_idestrellas
 * @property string $estrella
 * @property integer $categoria_idcategoria
 * @property string $categoria
 * @property integer $editorial_ideditorial
 * @property string $editorial
 * @property integer $condicioncomercial_idcondicioncomercial
 * @property string $condicincomercial
 * @property integer $cantidad
 */
class ViewEstrellascategoriaeditorial extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ViewEstrellascategoriaeditorial the static model class
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
		return 'view_estrellascategoriaeditorial';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('estrellas_idestrellas, categoria_idcategoria, editorial_ideditorial, editorial, condicioncomercial_idcondicioncomercial', 'required'),
			array('estrellas_idestrellas, categoria_idcategoria, editorial_ideditorial, condicioncomercial_idcondicioncomercial, cantidad', 'numerical', 'integerOnly'=>true),
			array('idestrellascategoriaeditorial', 'length', 'max'=>20),
			array('estrella, categoria, condicincomercial', 'length', 'max'=>45),
			array('editorial', 'length', 'max'=>256),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idestrellascategoriaeditorial, estrellas_idestrellas, estrella, categoria_idcategoria, categoria, editorial_ideditorial, editorial, condicioncomercial_idcondicioncomercial, condicincomercial, cantidad', 'safe', 'on'=>'search'),
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
			'idestrellascategoriaeditorial' => 'Idestrellascategoriaeditorial',
			'estrellas_idestrellas' => 'Estrellas Idestrellas',
			'estrella' => 'Estrella',
			'categoria_idcategoria' => 'Categoria Idcategoria',
			'categoria' => 'Categoria',
			'editorial_ideditorial' => 'Editorial Ideditorial',
			'editorial' => 'Editorial',
			'condicioncomercial_idcondicioncomercial' => 'Condicioncomercial Idcondicioncomercial',
			'condicincomercial' => 'Condicincomercial',
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
		$criteria->compare('estrella',$this->estrella,true);
		$criteria->compare('categoria_idcategoria',$this->categoria_idcategoria);
		$criteria->compare('categoria',$this->categoria,true);
		$criteria->compare('editorial_ideditorial',$this->editorial_ideditorial);
		$criteria->compare('editorial',$this->editorial,true);
		$criteria->compare('condicioncomercial_idcondicioncomercial',$this->condicioncomercial_idcondicioncomercial);
		$criteria->compare('condicincomercial',$this->condicincomercial,true);
		$criteria->compare('cantidad',$this->cantidad);

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