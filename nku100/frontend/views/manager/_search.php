<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ManagerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="manager-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'managerId') ?>

    <?= $form->field($model, 'managerName') ?>

    <?= $form->field($model, 'managerGender') ?>

    <?= $form->field($model, 'managerMail') ?>

    <?= $form->field($model, 'collegeId') ?>

    <?php // echo $form->field($model, 'managerHomework') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
