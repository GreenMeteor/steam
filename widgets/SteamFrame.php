<?php

namespace humhub\modules\steam\widgets;

use Yii;
use yii\helpers\Url;
use humhub\libs\Html;
use humhub\components\Widget;
use humhub\modules\steam\widgets\ConfigureForm;

/**
 *
 * @author Felli
 */
class SteamFrame extends Widget
{
    public $contentContainer;

    /**
     * @inheritdoc
     */
    public function run()
    {
        $url = Yii::$app->getModule('steam')->getServerUrl() . '/widget';
        return $this->render('steamframe', ['steamUrl' => $url]);
    }

}
