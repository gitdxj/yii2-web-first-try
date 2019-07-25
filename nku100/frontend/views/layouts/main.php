<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Home</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta tag Keywords -->

    <!-- Custom-Files -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <link rel="stylesheet" href="css/font-awesome.css">
    <!-- Font-Awesome-Icons-CSS -->
    <!-- //Custom-Files -->

    <!-- Web-Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700&amp;subset=devanagari,latin-ext" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=latin-ext"
          rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Great+Vibes&amp;subset=latin-ext" rel="stylesheet">
    <!-- //Web-Fonts -->
</head>

<body>
<!-- banner -->
<div class="main-banner-w3ls">
    <!-- header -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <a class="navbar-brand" href="index.html">
                <img src="images/nk_logo.png" height="100" width="100" class="logo img-fluid" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-toggle" aria-controls="navbarNavAltMarkup"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse navbar-toggle " id="navbarNavAltMarkup">
                <ul class="navbar-nav mx-lg-auto">
                    <li>
                        <a class="nav-link" href="/nku100/frontend/web/">主页</a>
                    </li>
                    <li>
                        <a class="nav-link" href="/nku100/frontend/web/index.php?r=activity">校庆活动</a>
                    </li>
                    <li>
                        <a class="nav-link" href="/nku100/frontend/web/index.php?r=site/figure">人物南开</a>
                    </li>
                    <li>
                        <a class="nav-link" href="/nku100/backend/web/">进入后台</a>
                    </li>
                </ul>
                <div class="header-social-w3ls text-center mt-lg-0 mt-4">
                    <ul class="list-unstyled">
                        <li>
                            <a href="#">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="mx-1">
                            <a href="#">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-google-plus" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- //header -->
</div>

    <?= $content ?>

    <!-- footer -->
    <footer class="footer-emp-w3ls py-5">
        <div class="container py-xl-5 py-lg-3">
            <div class="row footer-top">
                <div class="col-lg-5 footer-grid-wthree">
                    <h1 class="footer-title text-white mb-4">与我们联系</h1>
                    <div class="contact-info">
                        <h4 class="text-light text-uppercase mb-2">地点 :</h4>
                        <p>卫津路94号 <span>天津.</span></p>
                        <div class="phone mt-4 pt-2">
                            <h4 class="text-light text-uppercase mb-2">联系方式 :</h4>
                            <p>电话 : 15222769663</p>
                            <p>Email :
                                <a href="mailto:info@example.com">dxj@nankai.edu.cn</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 footer-grid-wthree mt-lg-0 mt-4">
                    <h2 class="footer-title text-white mb-4">快速链接</h2>
                    <ul class="links list-unstyled">
                        <li>
                            <a href="/nku100/frontend/web/"">主页</a>
                        </li>
                        <li class="my-2">
                            <a href="/nku100/frontend/web/index.php?r=activity">校庆活动</a>
                        </li>
                        <li class="my-2">
                            <a href="/nku100/frontend/web/index.php?r=site/figure">人物南开</a>
                        </li>
                        <li>
                            <a href="/nku100/backend/web/">进入后台</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- //footer -->

</body>

</html>
