<?php

namespace kouosl\ozgecmis\models;

use Yii;

/**
 * This is the model class for table "sablon".
 *
 * @property int $id
 * @property string $isim
 * @property string $soyisim
 * @property string $adres
 * @property string $cep_telefonu
 * @property string $email
 * @property string $egitim_bilgileri
 * @property string $is_deneyimleri
 * @property string $sertifikalar
 * @property string $yabancı_diller
 * @property string $kısaca_kendinizi_tanıtın
 */
class Sablon extends \yii\db\ActiveRecord
{
	/**
	 * {@inheritdoc}
	 */
	public static function tableName()
	{
		return 'sablon';
	}

	/**
	 * {@inheritdoc}
	 */
	public function rules()
	{
		return [
            [['isim', 'soyisim', 'adres', 'cep_telefonu', 'email', 'egitim_bilgileri', 'is_deneyimleri', 'sertifikalar', 'yabancı_diller', 'kısaca_kendinizi_tanıtın'], 'string'],
        ];
	}

	/**
	 * {@inheritdoc}
	 */
	public function attributeLabels()
	{
		return [
			'id' => 'ID',
			'isim' => 'Isim',
			'soyisim' => 'Soyisim',
			'adres' => 'Adres',
			'cep_telefonu' => 'Cep Telefonu',
			'email' => 'Email',
			'egitim_bilgileri' => 'Egitim Bilgileri',
			'is_deneyimleri' => 'Is Deneyimleri',
			'sertifikalar' => 'Sertifikalar',
			'yabancı_diller' => 'Yabancı Diller',
			'kısaca_kendinizi_tanıtın' => 'Kısaca Kendinizi Tanıtın',
		];
	}
}
