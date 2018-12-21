<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model vendor\kouosl\ozgecmis\models\Ozgecmis */

$this->title = 'Create Ozgecmis';
$this->params['breadcrumbs'][] = ['label' => 'Ozgecmis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ozgecmis-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
