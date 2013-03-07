<?php

/**
 * This is the model class for table "view_reservasestrellascategoriaeditorial".
 *
 * The followings are the available columns in table 'view_reservasestrellascategoriaeditorial':
 * @property string $idreservasestrellascategoriaeditorial
 * @property integer $cantidad
 * @property integer $prioridad
 * @property integer $ciudad_idciudad
 * @property string $ciudad
 * @property string $idestrellascategoriaeditorial
 * @property integer $estrellas_idestrellas
 * @property string $estrella
 * @property string $categoria
 * @property string $editorial
 * @property string $condicioncomercial
 */
class ViewReservasestrellascategoriaeditorial extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ViewReservasestrellascategoriaeditorial the static model class
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
		return 'view_reservasestrellascategoriaeditorial';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cantidad, prioridad, ciudad_idciudad, estrellas_idestrellas, editorial', 'required'),
			array('cantidad, prioridad, ciudad_idciudad, estrellas_idestrellas', 'numerical', 'integerOnly'=>true),
			array('idreservasestrellascategoriaeditorial, idestrellascategoriaeditorial', 'length', 'max'=>20),
			array('ciudad, estrella, categoria, condicioncomercial', 'length', 'max'=>45),
			array('editorial', 'length', 'max'=>256),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idreservasestrellascategoriaeditorial, cantidad, prioridad, ciudad_idciudad, ciudad, idestrellascategoriaeditorial, estrellas_idestrellas, estrella, categoria, editorial, condicioncomercial', 'safe', 'on'=>'search'),
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
			'idreservasestrellascategoriaeditorial' => 'Idreservasestrellascategoriaeditorial',
			'cantidad' => 'Cantidad',
			'prioridad' => 'Prioridad',
			'ciudad_idciudad' => 'Ciudad Idciudad',
			'ciudad' => 'Ciudad',
			'idestrellascategoriaeditorial' => 'Idestrellascategoriaeditorial',
			'estrellas_idestrellas' => 'Estrellas Idestrellas',
			'estrella' => 'Estrella',
			'categoria' => 'Categoria',
			'editorial' => 'Editorial',
			'condicioncomercial' => 'Condicioncomercial',
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

		$criteria->compare('idreservasestrellascategoriaeditorial',$this->idreservasestrellascategoriaeditorial,true);
		$criteria->compare('cantidad',$this->cantidad);
		$criteria->compare('prioridad',$this->prioridad);
		$criteria->compare('ciudad_idciudad',$this->ciudad_idciudad);
		$criteria->compare('ciudad',$this->ciudad,true);
		$criteria->compare('idestrellascategoriaeditorial',$this->idestrellascategoriaeditorial,true);
		$criteria->compare('estrellas_idestrellas',$this->estrellas_idestrellas);
		$criteria->compare('estrella',$this->estrella,true);
		$criteria->compare('categoria',$this->categoria,true);
		$criteria->compare('editorial',$this->editorial,true);
		$criteria->compare('condicioncomercial',$this->condicioncomercial,true);

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