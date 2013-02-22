<?php

/**
 * This is the model class for table "item".
 *
 * The followings are the available columns in table 'item':
 * @property integer $iditem
 * @property integer $editorial_ideditorial
 * @property string $nombre
 * @property string $codigosiglo
 * @property string $isbn
 * @property string $barcode
 * @property string $fechaedicion
 * @property integer $numeroedicion
 * @property string $fechacreacion
 * @property integer $temporal
 * @property string $estado
 *
 * The followings are the available model relations:
 * @property Cargasexceldetalle[] $cargasexceldetalles
 * @property Editorial $editorialIdeditorial
 * @property Autor[] $autors
 * @property Categoria[] $categorias
 * @property Terceros[] $terceroses
 * @property Tipoformato[] $tipoformatos
 * @property ItemHasTipoitematributos[] $itemHasTipoitematributoses
 * @property Itemprecio[] $itemprecios
 * @property Pedidosproveedoresentradasalmacendetalle[] $pedidosproveedoresentradasalmacendetalles
 * @property Pedidosproveedoresentradasalmacenfallados[] $pedidosproveedoresentradasalmacenfalladoses
 * @property Pedidosproveedoresitems[] $pedidosproveedoresitems
 */
class Item extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Item the static model class
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
		return 'item';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('editorial_ideditorial', 'required'),
			array('editorial_ideditorial, numeroedicion, temporal', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>512),
			array('codigosiglo, isbn, barcode, estado', 'length', 'max'=>45),
			array('fechaedicion, fechacreacion', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('iditem, editorial_ideditorial, nombre, codigosiglo, isbn, barcode, fechaedicion, numeroedicion, fechacreacion, temporal, estado', 'safe', 'on'=>'search'),
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
			'cargasexceldetalles' => array(self::HAS_MANY, 'Cargasexceldetalle', 'item_iditem'),
			'editorialIdeditorial' => array(self::BELONGS_TO, 'Editorial', 'editorial_ideditorial'),
			'autors' => array(self::MANY_MANY, 'Autor', 'item_has_autor(item_iditem, autor_idautor)'),
			'categorias' => array(self::MANY_MANY, 'Categoria', 'item_has_categoria(item_iditem, categoria_idcategoria)'),
			'terceroses' => array(self::MANY_MANY, 'Terceros', 'item_has_terceros(item_iditem, terceros_idterceros)'),
			'tipoformatos' => array(self::MANY_MANY, 'Tipoformato', 'item_has_tipoformato(item_iditem, tipoformato_idtipoformato)'),
			'itemHasTipoitematributoses' => array(self::HAS_MANY, 'ItemHasTipoitematributos', 'item_iditem'),
			'itemprecios' => array(self::HAS_MANY, 'Itemprecio', 'item_iditem'),
			'pedidosproveedoresentradasalmacendetalles' => array(self::HAS_MANY, 'Pedidosproveedoresentradasalmacendetalle', 'item_iditem'),
			'pedidosproveedoresentradasalmacenfalladoses' => array(self::HAS_MANY, 'Pedidosproveedoresentradasalmacenfallados', 'item_iditem'),
			'pedidosproveedoresitems' => array(self::HAS_MANY, 'Pedidosproveedoresitems', 'item_iditem'),
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
			'nombre' => 'Nombre',
			'codigosiglo' => 'Codigosiglo',
			'isbn' => 'Isbn',
			'barcode' => 'Barcode',
			'fechaedicion' => 'Fechaedicion',
			'numeroedicion' => 'Numeroedicion',
			'fechacreacion' => 'Fechacreacion',
			'temporal' => 'Temporal',
			'estado' => 'Estado',
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
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('codigosiglo',$this->codigosiglo,true);
		$criteria->compare('isbn',$this->isbn,true);
		$criteria->compare('barcode',$this->barcode,true);
		$criteria->compare('fechaedicion',$this->fechaedicion,true);
		$criteria->compare('numeroedicion',$this->numeroedicion);
		$criteria->compare('fechacreacion',$this->fechacreacion,true);
		$criteria->compare('temporal',$this->temporal);
		$criteria->compare('estado',$this->estado,true);

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