<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model vendor\kouosl\ozgecmis\models\Soruekle */

$this->title = 'Soru Ekle';
$this->params['breadcrumbs'][] = ['label' => 'Soruekle', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="soruekle-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

<br>
<br>
<br>
<br>
<br>

	<p>
        <?= Html::a('Geri', ['../ozgecmis/ozgecmis'], ['class' => 'btn btn-success']) ?>
    </p>
</div>
