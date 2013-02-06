<?php

/**
 * This is the model class for table "temp_entradasalmacendetalle".
 *
 * The followings are the available columns in table 'temp_entradasalmacendetalle':
 * @property string $idtemp_entradasalmacendetalle
 * @property integer $pedidosproveedoresitems_idpedidosproveedoresitems
 * @property integer $temp_entradasalmacen_idtemp_entradasalmacen
 * @property integer $recibido
 * @property integer $fallado
 * @property string $observacionesfallado
 * @property integer $finalizar
 *
 * The followings are the available model relations:
 * @property Pedidosproveedoresitems $pedidosproveedoresitemsIdpedidosproveedoresitems
 * @property TempEntradasalmacen $tempEntradasalmacenIdtempEntradasalmacen
 */
class TempEntradasalmacendetalle extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TempEntradasalmacendetalle the static model class
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
		return 'temp_entradasalmacendetalle';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pedidosproveedoresitems_idpedidosproveedoresitems, temp_entradasalmacen_idtemp_entradasalmacen', 'required'),
			array('pedidosproveedoresitems_idpedidosproveedoresitems, temp_entradasalmacen_idtemp_entradasalmacen, recibido, fallado, finalizar', 'numerical', 'integerOnly'=>true),
			array('observacionesfallado', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idtemp_entradasalmacendetalle, pedidosproveedoresitems_idpedidosproveedoresitems, temp_entradasalmacen_idtemp_entradasalmacen, recibido, fallado, observacionesfallado, finalizar', 'safe', 'on'=>'search'),
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
			'pedidosproveedoresitemsIdpedidosproveedoresitems' => array(self::BELONGS_TO, 'Pedidosproveedoresitems', 'pedidosproveedoresitems_idpedidosproveedoresitems'),
			'tempEntradasalmacenIdtempEntradasalmacen' => array(self::BELONGS_TO, 'TempEntradasalmacen', 'temp_entradasalmacen_idtemp_entradasalmacen'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idtemp_entradasalmacendetalle' => 'Idtemp Entradasalmacendetalle',
			'pedidosproveedoresitems_idpedidosproveedoresitems' => 'Pedidosproveedoresitems Idpedidosproveedoresitems',
			'temp_entradasalmacen_idtemp_entradasalmacen' => 'Temp Entradasalmacen Idtemp Entradasalmacen',
			'recibido' => 'Recibido',
			'fallado' => 'Fallado',
			'observacionesfallado' => 'Observacionesfallado',
			'finalizar' => 'Finalizar',
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

		$criteria->compare('idtemp_entradasalmacendetalle',$this->idtemp_entradasalmacendetalle,true);
		$criteria->compare('pedidosproveedoresitems_idpedidosproveedoresitems',$this->pedidosproveedoresitems_idpedidosproveedoresitems);
		$criteria->compare('temp_entradasalmacen_idtemp_entradasalmacen',$this->temp_entradasalmacen_idtemp_entradasalmacen);
		$criteria->compare('recibido',$this->recibido);
		$criteria->compare('fallado',$this->fallado);
		$criteria->compare('observacionesfallado',$this->observacionesfallado,true);
		$criteria->compare('finalizar',$this->finalizar);

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