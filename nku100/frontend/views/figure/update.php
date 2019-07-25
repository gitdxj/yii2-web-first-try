<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Figure */

$this->title = 'Update Figure: ' . $model->figureName;
$this->params['breadcrumbs'][] = ['label' => 'Figures', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->figureName, 'url' => ['view', 'id' => $model->figureName]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="figure-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
