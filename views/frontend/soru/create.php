<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model vendor\kouosl\ozgecmis\models\Soru */

$this->title = 'ÖZGEÇMİŞ OLUŞTUR';
$this->params['breadcrumbs'][] = ['label' => 'Sorus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="soru-create">

    <center><h1><?= Html::encode($this->title) ?></h1></center>
    		<h3 style="color: red">**Alanların Hepsini Eksiksiz Doldurun</h3>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
