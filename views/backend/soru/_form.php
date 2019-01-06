<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model vendor\kouosl\ozgecmis\models\Soru */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="soru-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'isim')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'soyisim')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dogum_tarihi')->textInput() ?>

    <?= $form->field($model, 'adres')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cep_telefonu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'egitim_bilgileri')->textarea(['rows' => 1]) ?>

    <?= $form->field($model, 'is_deneyimleri')->textarea(['rows' => 1]) ?>

    <?= $form->field($model, 'sertifikalar')->textarea(['rows' => 1]) ?>

    <?= $form->field($model, 'yabancı_diller')->textarea(['rows' => 1]) ?>

    <?= $form->field($model, 'kısaca_kendinizi_tanıtın')->textarea(['rows' => 1]) ?>

   <!-- <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>-->

    <p>
        <?= Html::a('Geri', ['../ozgecmis/ozgecmis'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php ActiveForm::end(); ?>

</div>
