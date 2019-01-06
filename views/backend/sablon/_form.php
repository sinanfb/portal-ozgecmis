<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model vendor\kouosl\ozgecmis\models\Sablon */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sablon-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'isim')->dropDownList([ 'true' => 'True', 'false' => 'False', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'soyisim')->dropDownList([ 'true' => 'True', 'false' => 'False', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'adres')->dropDownList([ 'true' => 'True', 'false' => 'False', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'cep_telefonu')->dropDownList([ 'true' => 'True', 'false' => 'False', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'email')->dropDownList([ 'true' => 'True', 'false' => 'False', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'egitim_bilgileri')->dropDownList([ 'true' => 'True', 'false' => 'False', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'is_deneyimleri')->dropDownList([ 'true' => 'True', 'false' => 'False', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'sertifikalar')->dropDownList([ 'true' => 'True', 'false' => 'False', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'yabancı_diller')->dropDownList([ 'true' => 'True', 'false' => 'False', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kısaca_kendinizi_tanıtın')->dropDownList([ 'true' => 'True', 'false' => 'False', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Kaydet', ['class' => 'btn btn-success']) ?>
    </div>
    

    <?php ActiveForm::end(); ?>

</div>
