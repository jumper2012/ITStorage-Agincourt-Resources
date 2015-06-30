<?php

/**
 * This is the model class for table "item".
 *
 * The followings are the available columns in table 'item':
 * @property integer $serial_number
 * @property integer $barcode_id
 * @property string $container
 * @property string $location
 * @property string $supplier_part
 * @property string $comment
 *
 * The followings are the available model relations:
 * @property Issue[] $issues
 * @property Produk $barcode
 * @property Return[] $returns
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
			array('serial_number, barcode_id', 'required'),
			array('serial_number, barcode_id', 'numerical', 'integerOnly'=>true),
			array('container, location', 'length', 'max'=>20),
			array('supplier_part', 'length', 'max'=>50),
			array('comment', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('serial_number, barcode_id, container, location, supplier_part, comment', 'safe', 'on'=>'search'),
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
			'issues' => array(self::HAS_MANY, 'Issue', 'serial_number'),
			'barcode' => array(self::BELONGS_TO, 'Produk', 'barcode_id'),
			'returns' => array(self::HAS_MANY, 'Return', 'serial_number'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'serial_number' => 'Serial Number',
			'barcode_id' => 'Barcode',
			'container' => 'Container',
			'location' => 'Location',
			'supplier_part' => 'Supplier Part',
			'comment' => 'Comment',
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

		$criteria->compare('serial_number',$this->serial_number);
		$criteria->compare('barcode_id',$this->barcode_id);
		$criteria->compare('container',$this->container,true);
		$criteria->compare('location',$this->location,true);
		$criteria->compare('supplier_part',$this->supplier_part,true);
		$criteria->compare('comment',$this->comment,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	public function searchByBarcode($barcode_id)
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('serial_number',$this->serial_number);
		$criteria->compare('barcode_id',$barcode_id);
		$criteria->compare('container',$this->container,true);
		$criteria->compare('location',$this->location,true);
		$criteria->compare('supplier_part',$this->supplier_part,true);
		$criteria->compare('comment',$this->comment,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
}