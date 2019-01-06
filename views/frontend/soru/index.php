<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel vendor\kouosl\ozgecmis\models\SoruSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sorus';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="soru-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Soru', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'isim',
            'soyisim',
            'dogum_tarihi',
            'adres',
            //'cep_telefonu',
            //'email:email',
            //'egitim_bilgileri:ntext',
            //'is_deneyimleri:ntext',
            //'sertifikalar:ntext',
            //'yabancı_diller:ntext',
            //'kısaca_kendinizi_tanıtın:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
