<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link href="/images/favicon.png" rel="shortcut icon" type="image/vnd.microsoft.icon">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,900' rel='stylesheet' type='text/css'>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        /*'brandLabel' => 'My Company',*/
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse',
        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
        ['label' => 'About us', 'url' => ['/axis/articles/article', 'id' => 1 ]],
        [
            'label' => 'Services', 
            'url' => ['/site/contact'],
            'items' => [
                 ['label' => 'Engineering', 'url' => ['/axis/articles/article', 'id' => 2]],
                 ['label' => 'PROCUREMENT ASSISTANCE', 'url' => ['/axis/articles/article', 'id' => 16]],
                 ['label' => 'PROJECT MANAGEMENT', 'url' => ['/axis/articles/article', 'id' => 17]],
                 //['label' => 'GMP AUDIT AND CONSULTING', 'url' => ['/axis/articles/article', 'id' => 18]],
                 ['label' => 'QUALIFICATION AND VALIDATION', 'url' => ['/axis/articles/article', 'id' => 19]],
                 //['label' => 'TECHNOLOGY LICENSING/TRANSFER CONSULTING', 'url' => ['/axis/articles/article', 'id' => 20]],
            ]
        ],
        ['label' => 'Projects', 'url' => ['/axis/articles/article', 'id' => 22 ]],
        ['label' => 'APPLICATION', 'url' => ['/axis/articles/article', 'id' => 21 ]],
        //['label' => 'News', 'url' => ['/axis/articles/category', 'id' => 4 ]],
        ['label' => 'Contact', 'url' => ['/site/contact']],
    ];
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container-fluid">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>


        <?php if (($_SERVER["REQUEST_URI"] == '/index.php?r=site%2Findex')||($_SERVER["REQUEST_URI"] == '/index.php')||($_SERVER["REQUEST_URI"] == '/')):?>
            <div id="index">
              <div id="top" class="slider" style="background-image: none;">
                  <video id="bgvid" autoplay  muted loop >
                      <source src="/video/1.mp4" type="video/mp4">
                  </video>
                  <!--<div class="top_title">
                    <div class="slogan col-xs-7"><h3>Design and Construction<br><span>of pharmaceutical facilities </span></h3></div>
                    <div class="red_block col-xs-5">
                      <div class="logo_cont">
                        <div class="col-sm-6"><img src="/images/logo.png"></div>
                        <div class="col-sm-6" style="padding-top: 15px;"><p>9870 ST lovePLACE, GLASGOWd,  45 FR 45.<br></p></div>
                      </div>
                    </div>
                  </div>-->
                    <div class="full-width-container">
                      <div class="container">
                          <div class="row">
                              <div class="bg-top fw col-sm-8">
                                 <div class="block-1 left-side oneHeight">
                                      <div class="wow">
                                        <h3 class="slogan">Design and Construction<br><span>of pharmaceutical facilities </span></h3>
                                     </div>
                                 </div>
                              </div>
                              <section id="ex0">
                              <div class="right_block post col-sm-4">
                                  <div class="block-1 red_block bg-2 fw right-side  oneHeight">     
                                      <div class="wow">
                                          <div class="logo_cont">
                                            <div class="col-xs-6"><img src="/images/logo.png"></div>
                                            <div class="col-xs-6" style="padding-top: 15px;"><p>9870 ST lovePLACE, GLASGOWd,  45 FR 45.<br></p></div>
                                          </div>
                                      </div>
                                  </div> 
                              </div></section>
                          </div>
                      </div> 
                  </div>
              </div>
        <?php else:?>
            <div id="about">
                <div id="top" class="slider">
                      <!--<div class="top_title">
                        <div class="slogan col-xs-7"><h3>Design and Construction<br><span>of pharmaceutical facilities </span></h3></div>
                        <div class="red_block col-xs-5">
                          <div class="logo_cont">
                            <div class="col-sm-6"><img src="/images/logo.png"></div>
                            <div class="col-sm-6" style="padding-top: 15px;"><p>9870 ST lovePLACE, GLASGOWd,  45 FR 45.<br></p></div>
                          </div>
                        </div>
                      </div>-->
                        <div class="full-width-container">
                          <div class="container">
                              <div class="row">
                                  <div class="bg-top fw col-sm-8">
                                     <div class="block-1 left-side oneHeight">
                                          <div class="wow">
                                            <h3 class="slogan">Design and Construction<br><span>of pharmaceutical facilities </span></h3>
                                         </div>
                                     </div>
                                  </div>
                                  <div class="right_block col-sm-4">
                                      <div class="block-1 red_block bg-2 fw right-side  oneHeight">     
                                          <div class="wow">
                                              <div class="logo_cont">
                                                <div class="col-xs-6"><img src="/images/logo.png"></div>
                                                <div class="col-xs-6" style="padding-top: 15px;"><p>9870 ST lovePLACE, GLASGOWd,  45 FR 45.<br></p></div>
                                              </div>
                                          </div>
                                      </div> 
                                  </div>
                              </div>
                          </div> 
                      </div>
                  </div>
        <?php endif;?>


        <?= $content ?>
    </div>
</div>












<footer class="clearfix">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <!--<div class="col-xs-3">
                    <h5>INFORMATION</h5>
                    <ul class="list list-1">
                        <li><a href="#" class="link link-1">Lorem ipsum dolor sit amet </a></li>
                        <li><a href="#" class="link link-1">Conse ctetur adipisicing </a></li>
                        <li><a href="#" class="link link-1">Elit sed do eiusmod tempor</a></li>
                        <li><a href="#" class="link link-1">Incididunt ut labore</a></li>
                        <li><a href="#" class="link link-1">Et dolore magna aliqua</a></li>
                        <li><a href="#" class="link link-1">Ut enim ad minim veniam</a></li>
                        <li><a href="#" class="link link-1">Quis nostrud exercitation </a></li>
                        <li><a href="#" class="link link-1">Ullamco laboris nisi </a></li>
                        <li><a href="#" class="link link-1">Ut aliquip ex ea commodo</a></li>
                    </ul>
                </div>
                <div class="col-xs-3">
                    <h5>Services</h5>
                    <ul class="list list-1">
                        <li><a href="#" class="link link-1">Elit sed do eiusmod tempor</a></li>
                        <li><a href="#" class="link link-1">Incididunt ut labore </a></li>
                        <li><a href="#" class="link link-1">Et dolore magna aliqua</a></li>
                        <li><a href="#" class="link link-1">Ut enim ad minim veniam</a></li>
                        <li><a href="#" class="link link-1">Quis nostrud exercitation</a></li>
                        <li><a href="#" class="link link-1">Ullamco laboris nisi </a></li>
                        <li><a href="#" class="link link-1">Ut aliquip ex ea commodo</a></li>
                    </ul>
                </div>
                <div class="col-xs-3">
                    <h5>partners</h5>
                    <ul class="list list-1">
                        <li><a href="#" class="link link-1">Ut enim ad minim veniam</a></li>
                        <li><a href="#" class="link link-1">Quis nostrud exercitation </a></li>
                        <li><a href="#" class="link link-1">Ullamco laboris nisi </a></li>
                        <li><a href="#" class="link link-1">Ut aliquip ex ea commodo </a></li>
                        <li><a href="#" class="link link-1">Lorem ipsum dolor sit amet </a></li>
                        <li><a href="#" class="link link-1">Conse ctetur adipisicing</a></li>
                        <li><a href="#" class="link link-1">Elit sed do eiusmod tempor</a></li>
                        <li><a href="#" class="link link-1">Incididunt ut labore</a></li>
                    </ul>
                </div>-->
                <!--<div class="col-xs-5 col-md-5">
                    <h5>Follow us</h5>
                    <ul class="list social-list">
                        <li><a fres="#" class="socicon">a</a></li>
                        <li><a fres="#" class="socicon">b</a></li>
                        <li><a fres="#" class="socicon">c</a></li>

                    </ul>
                </div>-->
                <div class="col-xs-7 col-md-7">
                    <h5>Copyright © 2015 Spectrum. All rights reserved.</h5>
                </div>
            </div>
        </div>
    </div>

</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>













