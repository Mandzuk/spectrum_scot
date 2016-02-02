<?php

use yii\helpers\Html;
use oknetsun\axis\widgets\category\CategoryWidget;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ArticlesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Category';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div id="category" class="row">

    <?= CategoryWidget::widget(['cat_id' => $model->id]) ?>

</div>
