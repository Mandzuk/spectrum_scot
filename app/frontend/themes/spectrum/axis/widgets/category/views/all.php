<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $searchModel app\models\NewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'News';
//$this->params['breadcrumbs'][] = $this->title;

?>


    <?php $i=1; ?>

        <?php foreach ($dataArticles as $post): ?>
            <?= $this->render('_all', ['article' => $post, 'module_name' => $module_name, 'count' => $i  ] );  $i++;?>
        <?php endforeach; ?>








