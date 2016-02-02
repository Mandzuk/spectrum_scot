<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use oknetsun\axis\widgets\article\ArticleWidget;


/* @var $this yii\web\View */
/* @var $model app\models\Articles */

$this->title = $model->title;
/* breadrunbs
$this->params['breadcrumbs'][] = ['label' => 'Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
*/
?>

<div class="Articles-view">
    <?= ArticleWidget::widget(['art_id' => $model->id]);?>
</div>

