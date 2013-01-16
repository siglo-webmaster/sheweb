<?php

/**
 * This is the model class for table "porcentajesreservas".
 *
 * The followings are the available columns in table 'porcentajesreservas':
 * @property integer $idporcentajesreservas
 * @property string $usergroups_user_id
 * @property integer $categoria_idcategoria
 * @property integer $editorial_ideditorial
 * @property integer $bodega_idbodega
 * @property string $porcentaje
 *
 * The followings are the available model relations:
 * @property Bodega $bodegaIdbodega
 * @property Categoria $categoriaIdcategoria
 * @property Editorial $editorialIdeditorial
 * @property UsergroupsUser $usergroupsUser
 */
class Porcentajesreservas extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Porcentajesreservas the static model class
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
		return 'porcentajesreservas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('usergroups_user_id, categoria_idcategoria, editorial_ideditorial, bodega_idbodega, porcentaje', 'required'),
			array('categoria_idcategoria, editorial_ideditorial, bodega_idbodega', 'numerical', 'integerOnly'=>true),
			array('usergroups_user_id', 'length', 'max'=>20),
			array('porcentaje', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idporcentajesreservas, usergroups_user_id, categoria_idcategoria, editorial_ideditorial, bodega_idbodega, porcentaje', 'safe', 'on'=>'search'),
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
			'bodegaIdbodega' => array(self::BELONGS_TO, 'Bodega', 'bodega_idbodega'),
			'categoriaIdcategoria' => array(self::BELONGS_TO, 'Categoria', 'categoria_idcategoria'),
			'editorialIdeditorial' => array(self::BELONGS_TO, 'Editorial', 'editorial_ideditorial'),
			'usergroupsUser' => array(self::BELONGS_TO, 'UsergroupsUser', 'usergroups_user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idporcentajesreservas' => 'Idporcentajesreservas',
			'usergroups_user_id' => 'Usergroups User',
			'categoria_idcategoria' => 'Categoria Idcategoria',
			'editorial_ideditorial' => 'Editorial Ideditorial',
			'bodega_idbodega' => 'Bodega Idbodega',
			'porcentaje' => 'Porcentaje',
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

		$criteria->compare('idporcentajesreservas',$this->idporcentajesreservas);
		$criteria->compare('usergroups_user_id',$this->usergroups_user_id,true);
		$criteria->compare('categoria_idcategoria',$this->categoria_idcategoria);
		$criteria->compare('editorial_ideditorial',$this->editorial_ideditorial);
		$criteria->compare('bodega_idbodega',$this->bodega_idbodega);
		$criteria->compare('porcentaje',$this->porcentaje,true);

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