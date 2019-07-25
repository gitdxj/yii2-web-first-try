<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\manager */

$this->title = 'Update Manager: ' . $model->managerId;
$this->params['breadcrumbs'][] = ['label' => 'Managers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->managerId, 'url' => ['view', 'id' => $model->managerId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="manager-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
