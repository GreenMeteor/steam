<?php

use yii\helpers\Url;
use humhub\libs\Html;
use humhub\models\Setting;

\humhub\modules\steam\Assets::register($this);
?>

<div class="panel panel-default panel-steam" id="panel-steam">
    <?= \humhub\widgets\PanelMenu::widget(['id' => 'panel-steam']); ?>
  <div class="panel-heading">
    <?=Yii::t('SteamModule.base', '<strong>Steam</strong>'); ?>
  </div>
  <div class="panel-body">

<?= Html::beginTag('div') ?>
<iframe src="<?= $steamUrl; ?>" frameborder="0" width="100%" height="190"></iframe>
<?= Html::endTag('div'); ?>

</div>
</div>
