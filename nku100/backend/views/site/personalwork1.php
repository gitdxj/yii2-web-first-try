<?php


/**
 * Team: ShuJuKuXiaoZu
 * Coding by dongxiangjing 1610199, 20190721
 */
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\helpers\Url;

$this->title = '个人作业';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1>冷东鹏(1711338)</h1>

    <p>
        所属成员：数据库小组
    </p>
    <br/>
    <div class="row">
        <div class="col-lg-5">
            <h4><a href="<?php echo Url::to('data\\personal\\'.'作业1(1711338_冷东鹏).pdf')?>">作业1：网页前端初探</a></h4>
            <h4><a href="<?php echo Url::to('data\\personal\\'.'作业2(1711338_冷东鹏).zip')?>">作业2：Web前端设计</a></h4>
            <h4><a href="<?php echo Url::to('data\\personal\\'.'作业3(1711338_冷东鹏).zip')?>">作业3：开源建站工具初试</a></h4>
        </div>
    </div>

</div>
