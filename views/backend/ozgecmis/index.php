<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use vendor\kouosl\ozgecmis\views\backend\soru;



/* @var $this yii\web\View */
/* @var $searchModel vendor\kouosl\ozgecmis\models\OzgecmisSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'ÖZGEÇMİŞ MODÜLÜ ADMİN ANASAYFASI';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ozgecmis-index">
   

 <br>
    <br>
    <center> <h1 style="color:green"><?= Html::encode($this->title) ?></h1></center>
    <br>
    <br>
    <br>
    <br>

    
    <div> 
        <div class="col-md-3">  
            <center> <h3 style="color:black">Kayıt Edilen Ozgecmişleri Görüntüleyebilirsiniz!!!</h3></center>
            <center><p>
            <?= Html::a('Kayıtları Görüntüle', [''.'soru/'.'index'], ['class' => 'btn btn-info btn-lg']) ?>
            </p> </center>
        </div>
        <div class="col-md-3">  
            <center> <h3 style="color:black">Ozgecmiş Oluşturmak İçin Sorulan Soruları Görüntüleyin!!!</h3></center>
            <center><p>
            <?= Html::a('Soruları Görüntüle', [''.'soru/'.'create'], ['class' => 'btn btn-warning btn-lg']) ?>
            </p> </center>
        </div>
        <div class="col-md-3">  
            <center> <h3 style="color:black">Soru Eklemek için Aşağıdaki Butona Tıklayın!!!</h3></center>
            <center><p>
            <?= Html::a('Soru Ekle', [''.'soruekle/'.'create'], ['class' => 'btn btn-success btn-lg']) ?>
            </p> </center>
        </div>
        <div class="col-md-3">  
            <center> <h3 style="color:black">Şablon Oluşturmak için Aşağıdaki Butona Tıklayın!!!</h3></center>
            <center><p>
            <?= Html::a('Şablon Oluştur', [''.'sablon/'.'create'], ['class' => 'btn btn-primary btn-lg']) ?>
            </p> </center>
        </div>




    
        </div>
    </div>

    


   <!-- <p>
        <?= Html::a('Create ', ['create'], ['class' => 'btn btn-success']) ?>
    </p>-->

   <!-- <?= GridView::widget([
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
