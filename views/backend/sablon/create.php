<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model vendor\kouosl\ozgecmis\models\Sablon */

$this->title = 'Sablon Oluştur';
$this->params['breadcrumbs'][] = ['label' => 'Sablon', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sablon-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

<br>
<br>
<br>

    <p>
        <?= Html::a('Geri', ['../ozgecmis/ozgecmis'], ['class' => 'btn btn-success']) ?>
    </p>

</div>
