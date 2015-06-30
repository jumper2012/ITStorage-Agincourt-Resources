<?php

/**
 * This is the model class for table "returns".
 *
 * The followings are the available columns in table 'returns':
 * @property integer $id_trans
 * @property integer $barcode_id
 * @property integer $serial_number
 * @property string $tanggal
 * @property string $username
 * @property string $department
 * @property string $notes
 *
 * The followings are the available model relations:
 * @property Item $serialNumber
 */
class Returns extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Returns the static model class
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
		return 'returns';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_trans, barcode_id, serial_number', 'required'),
			array('id_trans, barcode_id, serial_number', 'numerical', 'integerOnly'=>true),
			array('username, department', 'length', 'max'=>75),
			array('tanggal, notes', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_trans, barcode_id, serial_number, tanggal, username, department, notes', 'safe', 'on'=>'search'),
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
			'serialNumber' => array(self::BELONGS_TO, 'Item', 'serial_number'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_trans' => 'Id Trans',
			'barcode_id' => 'Barcode',
			'serial_number' => 'Serial Number',
			'tanggal' => 'Tanggal',
			'username' => 'Username',
			'department' => 'Department',
			'notes' => 'Notes',
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

		$criteria->compare('id_trans',$this->id_trans);
		$criteria->compare('barcode_id',$this->barcode_id);
		$criteria->compare('serial_number',$this->serial_number);
		$criteria->compare('tanggal',$this->tanggal,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('department',$this->department,true);
		$criteria->compare('notes',$this->notes,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}