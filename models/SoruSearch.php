<?php

namespace kouosl\ozgecmis\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use vendor\kouosl\ozgecmis\models\Soru;

/**
 * SoruSearch represents the model behind the search form of `vendor\kouosl\ozgecmis\models\Soru`.
 */
class SoruSearch extends Soru
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['isim', 'soyisim', 'dogum_tarihi', 'adres', 'cep_telefonu', 'email', 'egitim_bilgileri', 'is_deneyimleri', 'sertifikalar', 'yabancı_diller', 'kısaca_kendinizi_tanıtın'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Soru::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'dogum_tarihi' => $this->dogum_tarihi,
        ]);

        $query->andFilterWhere(['like', 'isim', $this->isim])
            ->andFilterWhere(['like', 'soyisim', $this->soyisim])
            ->andFilterWhere(['like', 'adres', $this->adres])
            ->andFilterWhere(['like', 'cep_telefonu', $this->cep_telefonu])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'egitim_bilgileri', $this->egitim_bilgileri])
            ->andFilterWhere(['like', 'is_deneyimleri', $this->is_deneyimleri])
            ->andFilterWhere(['like', 'sertifikalar', $this->sertifikalar])
            ->andFilterWhere(['like', 'yabancı_diller', $this->yabancı_diller])
            ->andFilterWhere(['like', 'kısaca_kendinizi_tanıtın', $this->kısaca_kendinizi_tanıtın]);

        return $dataProvider;
    }
}
