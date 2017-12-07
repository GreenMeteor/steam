<?php
namespace humhub\modules\steam;

use Yii;
use yii\helpers\Url;
use humhub\modules\steam\widgets\SteamFrame;
use humhub\models\Setting;

class Events extends \yii\base\Object
{

    public static function onAdminMenuInit(\yii\base\Event $event)
    {
        $event->sender->addItem([
            'label' => Yii::t('SteamModule.base', 'Steam Settings'),
            'url' => Url::toRoute('/steam/admin/index'),
            'group' => 'settings',
            'icon' => '<i class="fa fa-steam"></i>',
            'isActive' => Yii::$app->controller->module && Yii::$app->controller->module->id == 'steam' && Yii::$app->controller->id == 'admin',
            'sortOrder' => 650
        ]);
    }

public static function addSteamFrame($event)
    {
        if (Yii::$app->user->isGuest) {
            return;
        }
        $event->sender->view->registerAssetBundle(Assets::className());
        $event->sender->addWidget(SteamFrame::className(), [], [
            'sortOrder' => Setting::Get('timeout', 'steam')
        ]);
    }
}
