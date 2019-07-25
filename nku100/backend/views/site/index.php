<?php

use yii\helpers\Url;
/* @var $this yii\web\View */

/**
 * Team: ShuJuKuXiaoZu
 * Coding by dongxiangjing 1610199, 20190721
 */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>欢迎!</h1>

        <p class="lead">欢迎来到后台，我们都是爱南开的，您可以使用用户名：dxj，密码：123456 进行登录</p>
        <img src="<?php echo Url::to('image\\'.'nankai_campus.jpg')?>" style="width:900px;height:500px;">

    </div>

</div>
