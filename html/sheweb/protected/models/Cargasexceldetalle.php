<?php

/**
 * This is the model class for table "cargasexceldetalle".
 *
 * The followings are the available columns in table 'cargasexceldetalle':
 * @property string $idcargasexceldetalle
 * @property integer $pedidosproveedoresitems_idpedidosproveedoresitems
 * @property integer $cargasexcel_idcargasexcel
 *
 * The followings are the available model relations:
 * @property Pedidosproveedoresitems $pedidosproveedoresitemsIdpedidosproveedoresitems
 * @property Cargasexcel $cargasexcelIdcargasexcel
 */
class Cargasexceldetalle extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Cargasexceldetalle the static model class
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
		return 'cargasexceldetalle';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pedidosproveedoresitems_idpedidosproveedoresitems, cargasexcel_idcargasexcel', 'required'),
			array('pedidosproveedoresitems_idpedidosproveedoresitems, cargasexcel_idcargasexcel', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idcargasexceldetalle, pedidosproveedoresitems_idpedidosproveedoresitems, cargasexcel_idcargasexcel', 'safe', 'on'=>'search'),
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
			'cargasexcelIdcargasexcel' => array(self::BELONGS_TO, 'Cargasexcel', 'cargasexcel_idcargasexcel'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idcargasexceldetalle' => 'Idcargasexceldetalle',
			'pedidosproveedoresitems_idpedidosproveedoresitems' => 'Pedidosproveedoresitems Idpedidosproveedoresitems',
			'cargasexcel_idcargasexcel' => 'Cargasexcel Idcargasexcel',
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

		$criteria->compare('idcargasexceldetalle',$this->idcargasexceldetalle,true);
		$criteria->compare('pedidosproveedoresitems_idpedidosproveedoresitems',$this->pedidosproveedoresitems_idpedidosproveedoresitems);
		$criteria->compare('cargasexcel_idcargasexcel',$this->cargasexcel_idcargasexcel);

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