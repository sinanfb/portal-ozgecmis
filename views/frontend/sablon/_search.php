<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model vendor\kouosl\ozgecmis\models\SablonSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sablon-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'isim') ?>

    <?= $form->field($model, 'soyisim') ?>

    <?= $form->field($model, 'adres') ?>

    <?= $form->field($model, 'cep_telefonu') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'egitim_bilgileri') ?>

    <?php // echo $form->field($model, 'is_deneyimleri') ?>

    <?php // echo $form->field($model, 'sertifikalar') ?>

    <?php // echo $form->field($model, 'yabancı_diller') ?>

    <?php // echo $form->field($model, 'kısaca_kendinizi_tanıtın') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
