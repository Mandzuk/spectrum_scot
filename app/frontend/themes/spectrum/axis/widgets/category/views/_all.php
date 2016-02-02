<?php 

use yii\helpers\Html;

if ((!$article->slider) && ($article->video)){$video_marker = '<span class="vico"></span>';}else{$video_marker= '';}

?>



<?php if($count%6==0):?>
    <div class="col-lg-4 col-md-4 col-sm-4 oneHeight" style=" padding-left: 0px; ">
        <div class="block-2 bg-3 fw right-side">      
            <div class="box-3 wow fadeInRight animated" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInRight;">   
                <h3 class="gray_title"><?= $article->title; ?></h3>
                <div class="thumb-pad-1">
                   <div class="thumbnail">
                       <img src="/images/2.jpg" alt="photo">
                       <div class="caption">
                           <p><?= $article->intro; ?></p>
                           <?= Html::a("Read More",['/'.Html::encode($module_name).'/articles/article','id'=>$article->id], $options = ['class' =>'tag']) ?>
                       </div>
                   </div>
               </div>
            </div>
        </div> 
    </div>
  </div></div></div></div>

<?php elseif($count%5==0):?>
    <div class="col-lg-4 col-md-4 col-sm-4 oneHeight" style=" padding-right: 0px; ">
       <div class="block-1 left-side">
           <div class="box-2 wow fadeInLeft animated" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                <h3 class="white_title"><?= $article->title; ?></h3> 
                <div class="thumb-pad-1">
                   <div class="thumbnail">
                       <img src="/images/2.jpg" alt="photo">
                       <div class="caption">
                        <p><?= $article->intro; ?></p>
                           <?= Html::a("Read More",['/'.Html::encode($module_name).'/articles/article','id'=>$article->id], $options = ['class' =>'tag3']) ?>
                       </div>
                   </div>
               </div>
           </div>
       </div>
    </div>

<?php elseif($count%4==0):?>
  <div id="about">
          <div class="full-width-container">
            <div class="container">
                <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-4 oneHeight">
       <div class="block-1 left-side">
           <div class="box-2 wow fadeInLeft animated" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                <h3 class="white_title"><?= $article->title; ?></h3>      
                <div class="thumb-pad-1">
                   <div class="thumbnail">
                       <img src="/images/2.jpg" alt="photo">
                       <div class="caption">
                           <p><?= $article->intro; ?></p>
                           <?= Html::a("Read More",['/'.Html::encode($module_name).'/articles/article','id'=>$article->id], $options = ['class' =>'tag3']) ?>
                       </div>
                   </div>
               </div>
           </div>
       </div>
    </div>

<?php elseif($count%3==0):?>
    <div class="col-lg-4 col-md-4 right_block col-sm-4">
        <div class="block-1 bg-2 fw right-side oneHeight" style="height: 739px;">     
            <div class="wow fadeInRight animated" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInRight;">
                <h1 class="red_title"><?= $article->title; ?></h1>
                <div class="thumb-pad-1">
                   <div class="thumbnail">
                       <img src="/images/2.jpg" alt="photo">
                       <div class="caption">
                           <p><?= $article->intro; ?></p>
                           <?= Html::a("Read More",['/'.Html::encode($module_name).'/articles/article','id'=>$article->id], $options = ['class' =>'tag1']) ?>
                       </div>
                   </div>
               </div>
            </div>
        </div> 
    </div>
    </div></div></div></div>

<?php elseif($count%2==0):?>
    <div class="col-lg-4 bg-1 fw col-md-4 middle col-sm-4">
       <div class="block-1 left-side oneHeight" style="height: 739px;">
            <div class="wow fadeInLeft animated" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
               <h1 class="black_title"><?= $article->title; ?></h1>
               <div class="thumb-pad-1">
                   <div class="thumbnail">
                       <img src="/images/2.jpg" alt="photo">
                       <div class="caption">
                           <p><?= $article->intro; ?></p>
                           <?= Html::a("Read More",['/'.Html::encode($module_name).'/articles/article','id'=>$article->id], $options = ['class' =>'tag']) ?>
                       </div>
                   </div>
               </div>
            </div>
       </div>
    </div>
<?php elseif($count%1==0):?>
  <div id="info">
          <div class="full-width-container">
            <div class="container">
                <div class="row">
    <div class="col-lg-4 col-md-4 bg-1 fw col-sm-4">
       <div class="block-1 left-side oneHeight" style="height: 739px;">
            <div class="wow fadeInLeft animated" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
               <h1 class="black_title"><?= $article->title; ?></h1>
               <div class="thumb-pad-1">
                   <div class="thumbnail">
                       <img src="/images/1.jpg" alt="photo">
                       <div class="caption">
                           <p><?= $article->intro; ?></p>
                           <?= Html::a("Read More",['/'.Html::encode($module_name).'/articles/article','id'=>$article->id], $options = ['class' =>'tag']) ?>
                       </div>
                   </div>
               </div>
           </div>
       </div>
    </div>
<?php endif;?>





