<?php

/**
 * This is the model class for table "view_porcentajesreservas".
 *
 * The followings are the available columns in table 'view_porcentajesreservas':
 * @property integer $iditem
 * @property integer $editorial_ideditorial
 * @property integer $categoria_idcategoria
 * @property integer $bodega_idbodega
 * @property string $usergroups_user_id
 * @property integer $proyectosespeciales_idproyectosespeciales
 * @property string $porcentaje
 * @property integer $prioridad
 */
class ViewPorcentajesreservas extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ViewPorcentajesreservas the static model class
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
		return 'view_porcentajesreservas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('editorial_ideditorial, categoria_idcategoria, bodega_idbodega, usergroups_user_id, proyectosespeciales_idproyectosespeciales, porcentaje, prioridad', 'required'),
			array('iditem, editorial_ideditorial, categoria_idcategoria, bodega_idbodega, proyectosespeciales_idproyectosespeciales, prioridad', 'numerical', 'integerOnly'=>true),
			array('usergroups_user_id', 'length', 'max'=>20),
			array('porcentaje', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('iditem, editorial_ideditorial, categoria_idcategoria, bodega_idbodega, usergroups_user_id, proyectosespeciales_idproyectosespeciales, porcentaje, prioridad', 'safe', 'on'=>'search'),
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
			'iditem' => 'Iditem',
			'editorial_ideditorial' => 'Editorial Ideditorial',
			'categoria_idcategoria' => 'Categoria Idcategoria',
			'bodega_idbodega' => 'Bodega Idbodega',
			'usergroups_user_id' => 'Usergroups User',
			'proyectosespeciales_idproyectosespeciales' => 'Proyectosespeciales Idproyectosespeciales',
			'porcentaje' => 'Porcentaje',
			'prioridad' => 'Prioridad',
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

		$criteria->compare('iditem',$this->iditem);
		$criteria->compare('editorial_ideditorial',$this->editorial_ideditorial);
		$criteria->compare('categoria_idcategoria',$this->categoria_idcategoria);
		$criteria->compare('bodega_idbodega',$this->bodega_idbodega);
		$criteria->compare('usergroups_user_id',$this->usergroups_user_id,true);
		$criteria->compare('proyectosespeciales_idproyectosespeciales',$this->proyectosespeciales_idproyectosespeciales);
		$criteria->compare('porcentaje',$this->porcentaje,true);
		$criteria->compare('prioridad',$this->prioridad);

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