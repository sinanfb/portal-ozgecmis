<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel vendor\kouosl\ozgecmis\models\SoruSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'KAYITLI OLAN ÖZGEÇMİŞLER';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="soru-index">

    <center><h1 style="color: green"><?= Html::encode($this->title) ?></h1></center>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            'Ayarlar'=>
            ['class' => 'yii\grid\ActionColumn'],
            ['class' => 'yii\grid\ActionColumn2'],
            ['class' => 'yii\grid\ActionColumn3'],
            ['class' => 'yii\grid\SerialColumn'],

            'isim',
            'soyisim',
            'dogum_tarihi',
            'adres',
            'cep_telefonu',
            'email:email',
            'egitim_bilgileri:ntext',
            'is_deneyimleri:ntext',
            'sertifikalar:ntext',
            'yabancı_diller:ntext',
            'kısaca_kendinizi_tanıtın:ntext',
            
            [
            'class' => 'yii\grid\ActionColumn4',
            'urlCreator' => function ($action, $model, $key, $index) {
            if ($action === 'view') {
            $url = '../soru/view?id='.$model['id'];
            return $url;
            }
            }
            ]  
        ],


    ]); ?>



    <p>
        <?= Html::a('Geri', ['../ozgecmis/ozgecmis'], ['class' => 'btn btn-success']) ?>
    </p>

</div>
