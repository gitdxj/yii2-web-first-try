<?php


/* @var $this yii\web\View */
use yii\helpers\Url;
$this->title = 'My Yii Application';
?>
        <div class="container py-xl-5 py-lg-3">
                    <!-- heading title -->
                    <div class="text-center mb-lg-5 mb-4">
                        <h3 class="title-wthree mb-2">
                            百年南开<span class="mt-2 text-uppercase font-weight-bold">人物南开</span></h3>
                    </div>
                    <!-- //heading title -->
                    <div class="row gallery-agile-kmsrow">
                        <?php foreach ($figures as $key => $figure){
                            $figure_name = $figure['figureName'];
                            $figure_url = $figure['figureDescription'];
                            ?>
                        <div class="col-md-4 col-sm-6 gallery-agile-grids">
                            <div class="portfolio-hover">
                                <a href="<?php echo $figure_url ?>" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor magna aliqua.">
                                    <img src="<?php echo Url::to('figures\\'.$figure_name.'.jpg')?>" class="img-fluid zoom-img" alt="" />
                                </a>
                            </div>
                        </div>
                        <?php }?>
                    </div>
        </div>