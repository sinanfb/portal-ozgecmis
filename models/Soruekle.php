<?php

namespace kouosl\ozgecmis\models;

use Yii;

/**
 * This is the model class for table "soruekle".
 *
 * @property int $id
 * @property string $name
 */
class Soruekle extends \yii\db\ActiveRecord
{
	/**
	 * {@inheritdoc}
	 */
	public static function tableName()
	{
		return 'soruekle';
	}

	/**
	 * {@inheritdoc}
	 */
	public function rules()
	{
		return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
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
