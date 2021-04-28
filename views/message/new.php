<?php 
use yii\helpers\Html;
use yii\helpers\Url;
?>
<h1>New message</h1>

<?= Html::beginForm(['message/index']) ?>
    <?= Html::textarea('message') ?>
    <?= Html::submitInput() ?>
<?= Html::endForm() ?>