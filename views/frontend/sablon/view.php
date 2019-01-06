<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model vendor\kouosl\ozgecmis\models\Sablon */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Sablons', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sablon-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'adres',
            'cep_telefonu',
            'email:email',
            'egitim_bilgileri',
            'is_deneyimleri',
            'sertifikalar',
            'yabancı_diller',
            'kısaca_kendinizi_tanıtın',
        ],
    ]) ?>

</div>
