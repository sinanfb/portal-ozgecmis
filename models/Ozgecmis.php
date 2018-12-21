<?php

namespace kouosl\ozgecmis\models;

use Yii;

/**
 * This is the model class for table "ozgecmis".
 *
 * @property int $id
 * @property string $name
 */
class Ozgecmis extends \yii\db\ActiveRecord
{
	/**
	 * {@inheritdoc}
	 */
	public static function tableName()
	{
		return 'ozgecmis';
	}

	/**
	 * {@inheritdoc}
	 */
	public function rules()
	{
		return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 50],
        ];
	}

	/**
	 * {@inheritdoc}
	 */
	public function attributeLabels()
	{
		return [
			'id' => 'ID',
			'name' => 'Name',
		];
	}
}
