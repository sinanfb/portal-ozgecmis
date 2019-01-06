<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kouosl\ozgecmis\models\Ozgecmis;



/* @var $this yii\web\View */
/* @var $model vendor\kouosl\ozgecmis\models\Ozgecmis */
/* @var $form yii\widgets\ActiveForm */

/*  <?= $form->field($model, 'name')->dropDownList(
    		ArrayHelper::map(Ozgecmis::find()->all(),'id','name'),
    		['prompt'=>'Select User']) ?>*/
?>

<div class="ozgecmis-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

     <?= $form->field($model, 'name')->dropDownList(
            ArrayHelper::map(Ozgecmis::find()->all(),'id','name'),
            ['prompt'=>'Select User']) ?>
   

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
