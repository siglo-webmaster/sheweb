<?php

/**
 * This is the model class for table "pedidosproveedoresitemdetallereserva".
 *
 * The followings are the available columns in table 'pedidosproveedoresitemdetallereserva':
 * @property integer $idpedidosproveedoresitemdetallereserva
 * @property integer $pedidosproveedoresitems_idpedidosproveedoresitems
 * @property integer $bodega_idbodega
 * @property integer $proyectosespeciales_idproyectosespeciales
 * @property string $usuarios_idusuarios
 * @property integer $reservado
 *
 * The followings are the available model relations:
 * @property Proyectosespeciales $proyectosespecialesIdproyectosespeciales
 * @property Bodega $bodegaIdbodega
 * @property UsergroupsUser $usuariosIdusuarios
 * @property Pedidosproveedoresitems $pedidosproveedoresitemsIdpedidosproveedoresitems
 */
class Pedidosproveedoresitemdetallereserva extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Pedidosproveedoresitemdetallereserva the static model class
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
		return 'pedidosproveedoresitemdetallereserva';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pedidosproveedoresitems_idpedidosproveedoresitems, bodega_idbodega', 'required'),
			array('pedidosproveedoresitems_idpedidosproveedoresitems, bodega_idbodega, proyectosespeciales_idproyectosespeciales, reservado', 'numerical', 'integerOnly'=>true),
			array('usuarios_idusuarios', 'length', 'max'=>20),
                        array('reservado','numerical','integerOnly'=>true,'min'=>1,'tooSmall'=>'Debe ingresar al menos 1 producto'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idpedidosproveedoresitemdetallereserva, pedidosproveedoresitems_idpedidosproveedoresitems, bodega_idbodega, proyectosespeciales_idproyectosespeciales, usuarios_idusuarios, reservado', 'safe', 'on'=>'search'),
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
			'proyectosespecialesIdproyectosespeciales' => array(self::BELONGS_TO, 'Proyectosespeciales', 'proyectosespeciales_idproyectosespeciales'),
			'bodegaIdbodega' => array(self::BELONGS_TO, 'Bodega', 'bodega_idbodega'),
			'usuariosIdusuarios' => array(self::BELONGS_TO, 'UsergroupsUser', 'usuarios_idusuarios'),
			'pedidosproveedoresitemsIdpedidosproveedoresitems' => array(self::BELONGS_TO, 'Pedidosproveedoresitems', 'pedidosproveedoresitems_idpedidosproveedoresitems'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idpedidosproveedoresitemdetallereserva' => 'Idpedidosproveedoresitemdetallereserva',
			'pedidosproveedoresitems_idpedidosproveedoresitems' => 'Pedidosproveedoresitems Idpedidosproveedoresitems',
			'bodega_idbodega' => 'Bodega Idbodega',
			'proyectosespeciales_idproyectosespeciales' => 'Proyectosespeciales Idproyectosespeciales',
			'usuarios_idusuarios' => 'Usuarios Idusuarios',
			'reservado' => 'Reservado',
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

		$criteria->compare('idpedidosproveedoresitemdetallereserva',$this->idpedidosproveedoresitemdetallereserva);
		$criteria->compare('pedidosproveedoresitems_idpedidosproveedoresitems',$this->pedidosproveedoresitems_idpedidosproveedoresitems);
		$criteria->compare('bodega_idbodega',$this->bodega_idbodega);
		$criteria->compare('proyectosespeciales_idproyectosespeciales',$this->proyectosespeciales_idproyectosespeciales);
		$criteria->compare('usuarios_idusuarios',$this->usuarios_idusuarios,true);
		$criteria->compare('reservado',$this->reservado);

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