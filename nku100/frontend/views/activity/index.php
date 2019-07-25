<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ActivitySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Activities';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="activity-index">



    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'activityAddress',
            'activityTime',
            'activityContent:ntext',
            'activityName',
            'activityId',
            // 'categoryId',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
