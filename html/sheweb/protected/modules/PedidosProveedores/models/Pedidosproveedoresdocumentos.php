<?php

/**
 * This is the model class for table "pedidosproveedoresdocumentos".
 *
 * The followings are the available columns in table 'pedidosproveedoresdocumentos':
 * @property integer $idpedidosproveedoresdocumentos
 * @property integer $pedidosproveedores_idpedidosproveedores
 * @property integer $tiposdocumentosanexos_idtiposdocumentosanexos
 * @property string $url
 * @property string $nombre
 *
 * The followings are the available model relations:
 * @property Tiposdocumentosanexos $tiposdocumentosanexosIdtiposdocumentosanexos
 * @property Pedidosproveedores $pedidosproveedoresIdpedidosproveedores
 */
class Pedidosproveedoresdocumentos extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Pedidosproveedoresdocumentos the static model class
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
		return 'pedidosproveedoresdocumentos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pedidosproveedores_idpedidosproveedores, tiposdocumentosanexos_idtiposdocumentosanexos, url, nombre', 'required'),
			array('pedidosproveedores_idpedidosproveedores, tiposdocumentosanexos_idtiposdocumentosanexos', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idpedidosproveedoresdocumentos, pedidosproveedores_idpedidosproveedores, tiposdocumentosanexos_idtiposdocumentosanexos, url, nombre', 'safe', 'on'=>'search'),
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
			'tiposdocumentosanexosIdtiposdocumentosanexos' => array(self::BELONGS_TO, 'Tiposdocumentosanexos', 'tiposdocumentosanexos_idtiposdocumentosanexos'),
			'pedidosproveedoresIdpedidosproveedores' => array(self::BELONGS_TO, 'Pedidosproveedores', 'pedidosproveedores_idpedidosproveedores'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idpedidosproveedoresdocumentos' => 'Idpedidosproveedoresdocumentos',
			'pedidosproveedores_idpedidosproveedores' => 'Pedidosproveedores Idpedidosproveedores',
			'tiposdocumentosanexos_idtiposdocumentosanexos' => 'Tiposdocumentosanexos Idtiposdocumentosanexos',
			'url' => 'Url',
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

		$criteria->compare('idpedidosproveedoresdocumentos',$this->idpedidosproveedoresdocumentos);
		$criteria->compare('pedidosproveedores_idpedidosproveedores',$this->pedidosproveedores_idpedidosproveedores);
		$criteria->compare('tiposdocumentosanexos_idtiposdocumentosanexos',$this->tiposdocumentosanexos_idtiposdocumentosanexos);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('nombre',$this->nombre,true);

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