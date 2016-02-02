<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';

?>

<div id="about" class="contact">
  <div id="info">
      <div class="full-width-container">
          <div class="container">
              <div class="row">
                  <div class="col-lg-8 col-md-8 bg-1 fw col-sm-8">
                     <div class="block-1 left-side oneHeight" style="height: 739px;">
                          <div class="wow fadeInLeft animated" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                            <h1 class="black_title">SPECTRUM</h1>
                            <h2 class="black_title">Integrated Consulting LP</h2>
                             <div class="thumb-pad-1">
                                 <div class="thumbnail">
                                     <div class="caption">
                                        <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                                             <div class="col-lg-6 col-md-6 col-sm-6"><?= $form->field($model, 'name')->textInput(['placeholder'=>'YOUR NAME']) ?></div>

                                            <div class="col-lg-6 col-md-6 col-sm-6"><?= $form->field($model, 'email')->textInput(['placeholder'=>'YOUR E-MAIL']) ?></div>

                                            <div class="col-lg-6 col-md-6 col-sm-6"><?= $form->field($model, 'subject')->textInput(['placeholder'=>'YOUR SUBJECT']) ?></div>

                                            <div class="col-lg-6 col-md-6 col-sm-6"><?= $form->field($model, 'phone')->textInput(['placeholder'=>'YOUR PHONE']) ?></div>

                                            <div class="col-lg-12 col-md-12 col-sm-12"><?= $form->field($model, 'body')->textArea(['rows' => 6]) ?></div>

                                            <div class="form-group">
                                            <?= Html::submitButton('Submit', ['class' => 'tag', 'name' => 'contact-button']) ?>
                                            </div>

                                        <?php ActiveForm::end(); ?>
                                         
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-4 right_block col-sm-4">
                      <div class="block-1 bg-2 fw right-side oneHeight" style="height: 739px;">     
                          <div class="wow fadeInRight animated" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInRight;">
                              <div class="box-1">
                                  <h1 class="red_title">Contact form</h1>
                              </div>
                          </div>
                      </div> 
                  </div>
              </div>
          </div> 
      </div>
  </div>


</div>


















