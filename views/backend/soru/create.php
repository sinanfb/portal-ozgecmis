<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model vendor\kouosl\ozgecmis\models\Soru */

$this->title = 'Soru Oluştur';
$this->params['breadcrumbs'][] = ['label' => 'Soru', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="soru-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
