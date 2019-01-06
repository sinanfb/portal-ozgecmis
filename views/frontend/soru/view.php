<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model vendor\kouosl\ozgecmis\models\Soru */

$this->title = $model->isim;
$this->params['breadcrumbs'][] = ['label' => 'Sorus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="soru-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Güncelle', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Sil', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
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
        ],
    ]) ?>

    <p>
        <?= Html::a('Geri', ['../ozgecmis/ozgecmis'], ['class' => 'btn btn-success']) ?>
    </p>

</div>
