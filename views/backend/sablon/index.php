<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel vendor\kouosl\ozgecmis\models\SablonSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sablons';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sablon-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Sablon', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'isim',
            'soyisim',
            'adres',
            'cep_telefonu',
            //'email:email',
            //'egitim_bilgileri',
            //'is_deneyimleri',
            //'sertifikalar',
            //'yabancı_diller',
            //'kısaca_kendinizi_tanıtın',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
