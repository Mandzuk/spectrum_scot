<?php

use oknetsun\axis\widgets\category\CategoryWidget;


$this->title = 'Cui prodest?';

?>


<div class="site-index">
 	<?= CategoryWidget::widget(['cat_id' => 0]);?>
</div>
