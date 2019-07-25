<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Activity */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="activity-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'activityAddress')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'activityTime')->textInput() ?>

    <?= $form->field($model, 'activityContent')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'activityName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'categoryId')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
