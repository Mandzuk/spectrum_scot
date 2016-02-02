<?php

use yii\helpers\Html;
use oknetsun\axis\assets\TimelineAsset;


TimelineAsset::register($this);

/* @var $this yii\web\View */
/* @var $searchModel app\models\NewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Error ';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="error">
	<?php if($error == 1): ?>
		<h1 class="cat-news-header">Такої категорії не існує!</h1>
		<h4>Кепсько, але Ви можете спробувати іншу категорію, чи поверніться до <a href="/">головної сторінки </a></h4>
	<?php else: ?>
		<h1 class="cat-news-header">У цій категорії немає жодної статті!</h1>
		<h4>Кепсько, але Ви можете спробувати іншу категорію, чи поверніться до <a href="/">головної сторінки </a></h4>

	<?php endif; ?>
</div>
