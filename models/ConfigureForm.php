<?php

namespace humhub\modules\Steam\models;

use Yii;
use yii\base\Model;

/**
 * ConfigureForm defines the configurable fields.

 */
class ConfigureForm extends Model
{

    public $serverUrl;

    // Settings
    public $implement = ['System.Behaviors.SettingsModel'];

    // Settings field & Code
    public $settingsFields = 'settings/fields.yaml';

    public $settingsCode = 'humhub_Steam_system_settings';

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['serverUrl', 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'serverUrl' => Yii::t('SteamModule.base', 'Steam Widget URL:'),
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeHints()
    {
        return [
            'serverUrl' => Yii::t('SteamModule.base', 'e.g. http://store.steampowered.com/widget/{id}/{id}'),
        ];
    }

    public function loadSettings()
    {
        $this->serverUrl = Yii::$app->getModule('steam')->settings->get('serverUrl');

        return true;
    }

    public function save()
    {
        Yii::$app->getModule('steam')->settings->set('serverUrl', $this->serverUrl);

        return true;
    }

}
