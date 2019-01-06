<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model vendor\kouosl\ozgecmis\models\Ozgecmis */

$this->title = 'Update Ozgecmis: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Ozgecmis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];

$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ozgecmis-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
