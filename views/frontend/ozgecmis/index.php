<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use vendor\kouosl\ozgecmis\views\backend\soru;
use kouosl\ozgecmis\Module;



/* @var $this yii\web\View */
/* @var $searchModel vendor\kouosl\ozgecmis\models\OzgecmisSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'ÖZGEÇMİŞ OLUŞTUR';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ozgecmis-index">
   

    <br>
    <center><h1><?= Html::encode($this->title) ?></h1></center>
    <br>
    <br>
   


    <!--<p>
        <?= Html::a('Create Ozgecmis', ['soru/'.'create'], ['class' => 'btn btn-info']) ?>
    </p>-->


    <center><p>
       <h3 ">Aşağıdaki Butona Tıklayarak Ozgecmişinizi Oluşturabilirsiniz</h3> <?= Html::a('Oluştur', ['soru/'.'create'], ['class' => 'btn btn-success btn-lg']) ?>
    </p></center>
 

<!--
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            //'id',
            'name',
                        
            ['class' => 'yii\grid\ActionColumn2'],
            ['class' => 'yii\grid\ActionColumn3'],
        ],
    ]); ?>-->








</div>
