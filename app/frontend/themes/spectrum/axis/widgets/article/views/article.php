<?php

use yii\helpers\Html;
use oknetsun\slider\SliderWidget;
use oknetsun\video\VideoWidget;



$this->title = 'article';
//$this->params['breadcrumbs'][] = $this->title;
$article = $dataArticles; 
?>


<?php if($article->cat!=4):?> 
<?= $article->description; ?>

<?php else:?>     

  <div id="bg_img" >
        <div class="block-3 parallax-bg-1 parallax" data-parallax-speed="-0.3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2><?=$article->title?></h2>
                        <p><?= $article->description; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif?> 



<!-- Поля для вивода 
    'id',
    'date',
    'title',
    'cat',
    'author',
    'img',
    'slider',
    'video',
    'intro:ntext',
    'description:ntext',
-->