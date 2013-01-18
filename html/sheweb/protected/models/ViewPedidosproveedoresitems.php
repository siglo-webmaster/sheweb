<?php

/**
 * This is the model class for table "view_pedidosproveedoresitems".
 *
 * The followings are the available columns in table 'view_pedidosproveedoresitems':
 * @property integer $idpedidosproveedoresitems
 * @property integer $pedidosproveedores_idpedidosproveedores
 * @property integer $item_iditem
 * @property integer $solicitado
 * @property integer $confirmado
 * @property integer $reservado
 * @property integer $recibido
 * @property string $estado
 * @property string $usuarios_idusuarios
 * @property integer $proyectosespeciales_idproyectosespeciales
 * @property string $username
 * @property string $nombre
 * @property string $isbn
 * @property string $barcode
 * @property string $fechaedicion
 * @property string $fechacreacion
 * @property integer $temporal
 * @property integer $ideditorial
 * @property string $nombreeditorial
 * @property integer $idcondicioncomercial
 * @property string $condicioncomercial
 */
class ViewPedidosproveedoresitems extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ViewPedidosproveedoresitems the static model class
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
		return 'view_pedidosproveedoresitems';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pedidosproveedores_idpedidosproveedores, item_iditem, proyectosespeciales_idproyectosespeciales, nombreeditorial', 'required'),
			array('idpedidosproveedoresitems, pedidosproveedores_idpedidosproveedores, item_iditem, solicitado, confirmado, reservado, recibido, proyectosespeciales_idproyectosespeciales, temporal, ideditorial, idcondicioncomercial', 'numerical', 'integerOnly'=>true),
			array('estado, isbn, barcode, condicioncomercial', 'length', 'max'=>45),
			array('usuarios_idusuarios', 'length', 'max'=>20),
			array('username', 'length', 'max'=>120),
			array('nombre', 'length', 'max'=>512),
			array('nombreeditorial', 'length', 'max'=>256),
			array('fechaedicion, fechacreacion', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idpedidosproveedoresitems, pedidosproveedores_idpedidosproveedores, item_iditem, solicitado, confirmado, reservado, recibido, estado, usuarios_idusuarios, proyectosespeciales_idproyectosespeciales, username, nombre, isbn, barcode, fechaedicion, fechacreacion, temporal, ideditorial, nombreeditorial, idcondicioncomercial, condicioncomercial', 'safe', 'on'=>'search'),
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
			'idpedidosproveedoresitems' => 'Idpedidosproveedoresitems',
			'pedidosproveedores_idpedidosproveedores' => 'Pedidosproveedores Idpedidosproveedores',
			'item_iditem' => 'Item Iditem',
			'solicitado' => 'Solicitado',
			'confirmado' => 'Confirmado',
			'reservado' => 'Reservado',
			'recibido' => 'Recibido',
			'estado' => 'Estado',
			'usuarios_idusuarios' => 'Usuarios Idusuarios',
			'proyectosespeciales_idproyectosespeciales' => 'Proyectosespeciales Idproyectosespeciales',
			'username' => 'Username',
			'nombre' => 'Nombre',
			'isbn' => 'Isbn',
			'barcode' => 'Barcode',
			'fechaedicion' => 'Fechaedicion',
			'fechacreacion' => 'Fechacreacion',
			'temporal' => 'Temporal',
			'ideditorial' => 'Ideditorial',
			'nombreeditorial' => 'Nombreeditorial',
			'idcondicioncomercial' => 'Idcondicioncomercial',
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

		$criteria->compare('idpedidosproveedoresitems',$this->idpedidosproveedoresitems);
		$criteria->compare('pedidosproveedores_idpedidosproveedores',$this->pedidosproveedores_idpedidosproveedores);
		$criteria->compare('item_iditem',$this->item_iditem);
		$criteria->compare('solicitado',$this->solicitado);
		$criteria->compare('confirmado',$this->confirmado);
		$criteria->compare('reservado',$this->reservado);
		$criteria->compare('recibido',$this->recibido);
		$criteria->compare('estado',$this->estado,true);
		$criteria->compare('usuarios_idusuarios',$this->usuarios_idusuarios,true);
		$criteria->compare('proyectosespeciales_idproyectosespeciales',$this->proyectosespeciales_idproyectosespeciales);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('isbn',$this->isbn,true);
		$criteria->compare('barcode',$this->barcode,true);
		$criteria->compare('fechaedicion',$this->fechaedicion,true);
		$criteria->compare('fechacreacion',$this->fechacreacion,true);
		$criteria->compare('temporal',$this->temporal);
		$criteria->compare('ideditorial',$this->ideditorial);
		$criteria->compare('nombreeditorial',$this->nombreeditorial,true);
		$criteria->compare('idcondicioncomercial',$this->idcondicioncomercial);
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