<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Figure */

$this->title = 'Create Figure';
$this->params['breadcrumbs'][] = ['label' => 'Figures', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="figure-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
