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

$this->title = '团队作业';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1>数据库小组</h1>

    <p>
        团队成员：冷东鹏(1711338)，胡怡静(1711428)，李科(1711344)，蒿闪(1610979)，董向京(1610199)
    </p>
    <br/>
    <div class="row">
        <div class="col-lg-5">
            <h4><a href="<?php echo Url::to('data\\team\\'.'数据库小组_需求文档(1711338_1711428_1711344_1610979_1610199).pdf')?>">需求文档</a></h4>
            <h4><a href="<?php echo Url::to('data\\team\\'.'数据库小组_设计文档(1711338_1711428_1711344_1610979_1610199).pdf')?>">设计文档</a></h4>
            <h4><a href="<?php echo Url::to('data\\team\\'.'数据库小组_实现文档(1711338_1711428_1711344_1610979_1610199).pdf')?>">实现文档</a></h4>
            <h4><a href="<?php echo Url::to('data\\team\\'.'数据库小组_用户手册(1711338_1711428_1711344_1610979_1610199).pdf')?>">用户手册</a></h4>
            <h4><a href="<?php echo Url::to('data\\team\\'.'数据库小组_项目展示(1711338_1711428_1711344_1610979_1610199).pptx')?>">项目展示PPT</a></h4>
            <!-- <h4><a href="<?php echo Url::to('data\\team\\'.'数据库小组_源码(1711338_1711428_1711344_1610979_1610199).zip')?>">源码</a></h4> -->
            <!-- <h4><a href="<?php echo Url::to('data\\team\\'.'数据库小组_数据库文件(1711338_1711428_1711344_1610979_1610199).zip')?>">数据库文件</a></h4> -->
            <h4><a href="<?php echo Url::to('data\\team\\'.'数据库小组_部署文档(1711338_1711428_1711344_1610979_1610199).pdf')?>">部署文档</a></h4>
        </div>
    </div>

</div>
