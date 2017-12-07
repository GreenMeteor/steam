<?php

namespace humhub\modules\steam;

use Yii;
use yii\helpers\Url;

class Module extends \humhub\components\Module
{

    /**
     * @inheritdoc
     */
    public function getConfigUrl()
    {
        return Url::to([
                    '/steam/admin'
        ]);
    }
    public function getServerUrl()
    {
        $url = $this->settings->get('serverUrl');
        if (empty($url)) {
            return 'http://store.steampowered.com';
        }
        return $url;
    }

}
