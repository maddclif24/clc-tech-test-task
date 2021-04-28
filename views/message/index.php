<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\LinkPager;
?>
<h1>message/index</h1>

<?= Html::a("New message",
            Url::to(['message/new'])) ?>

<?php foreach ($messages as $message): ?>
    <li>
        <?= Html::encode("({$message->id})") ?>:
        <?= $message->text ?>
    </li>
<?php endforeach; ?>
</ul>

