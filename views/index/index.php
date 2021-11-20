<?php

use humhub\modules\content\widgets\richtext\RichText;

/* @var $this \humhub\modules\ui\view\components\View */

?>
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h4 class="modal-title" id="myModalLabel"><?= $title; ?></h4>
</div>
<div class="modal-body">
<?= RichText::output($model->message); ?>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-primary"
            data-dismiss="modal"><?= Yii::t('BreakingnewsModule.views_index', 'Close'); ?></button>
</div>




