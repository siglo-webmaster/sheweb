<?php

/**
 * This is the model class for table "temp_entradasalmacen".
 *
 * The followings are the available columns in table 'temp_entradasalmacen':
 * @property integer $idtemp_entradasalmacen
 * @property string $documentoproveedor
 * @property string $observaciones
 * @property integer $bodega_idbodega
 * @property integer $pedidosproveedores_idpedidosproveedores
 * @property string $usergroups_user_id
 *
 * The followings are the available model relations:
 * @property Bodega $bodegaIdbodega
 * @property Pedidosproveedores $pedidosproveedoresIdpedidosproveedores
 * @property UsergroupsUser $usergroupsUser
 * @property TempEntradasalmacendetalle[] $tempEntradasalmacendetalles
 */
class TempEntradasalmacen extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TempEntradasalmacen the static model class
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
		return 'temp_entradasalmacen';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('bodega_idbodega, pedidosproveedores_idpedidosproveedores, usergroups_user_id', 'required'),
			array('bodega_idbodega, pedidosproveedores_idpedidosproveedores', 'numerical', 'integerOnly'=>true),
			array('documentoproveedor', 'length', 'max'=>255),
			array('usergroups_user_id', 'length', 'max'=>20),
			array('observaciones', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idtemp_entradasalmacen, documentoproveedor, observaciones, bodega_idbodega, pedidosproveedores_idpedidosproveedores, usergroups_user_id', 'safe', 'on'=>'search'),
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
			'pedidosproveedoresIdpedidosproveedores' => array(self::BELONGS_TO, 'Pedidosproveedores', 'pedidosproveedores_idpedidosproveedores'),
			'usergroupsUser' => array(self::BELONGS_TO, 'UsergroupsUser', 'usergroups_user_id'),
			'tempEntradasalmacendetalles' => array(self::HAS_MANY, 'TempEntradasalmacendetalle', 'temp_entradasalmacen_idtemp_entradasalmacen'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idtemp_entradasalmacen' => 'Idtemp Entradasalmacen',
			'documentoproveedor' => 'Documentoproveedor',
			'observaciones' => 'Observaciones',
			'bodega_idbodega' => 'Bodega Idbodega',
			'pedidosproveedores_idpedidosproveedores' => 'Pedidosproveedores Idpedidosproveedores',
			'usergroups_user_id' => 'Usergroups User',
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

		$criteria->compare('idtemp_entradasalmacen',$this->idtemp_entradasalmacen);
		$criteria->compare('documentoproveedor',$this->documentoproveedor,true);
		$criteria->compare('observaciones',$this->observaciones,true);
		$criteria->compare('bodega_idbodega',$this->bodega_idbodega);
		$criteria->compare('pedidosproveedores_idpedidosproveedores',$this->pedidosproveedores_idpedidosproveedores);
		$criteria->compare('usergroups_user_id',$this->usergroups_user_id,true);

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