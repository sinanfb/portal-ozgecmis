<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model vendor\kouosl\ozgecmis\models\Soruekle */

$this->title = 'Create Soruekle';
$this->params['breadcrumbs'][] = ['label' => 'Soruekles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="soruekle-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
