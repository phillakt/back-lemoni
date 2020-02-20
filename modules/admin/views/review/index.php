<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

Url::remember();

$this->title = 'Отзывы';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="review-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать отзыв', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'phone',
            'comment:ntext',
            'publicated',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
