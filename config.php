<?php

namespace humhub\modules\steam;

return [
    'id' => 'steam',
    'class' => 'humhub\modules\steam\Module',
    'namespace' => 'humhub\modules\steam',
    'events' => [
        [
            'class' => \humhub\modules\dashboard\widgets\Sidebar::className(),
            'event' => \humhub\modules\dashboard\widgets\Sidebar::EVENT_INIT,
            'callback' => [
                'humhub\modules\steam\Events',
                'addSteamFrame'
            ]
        ],
        [
            'class' => \humhub\modules\space\widgets\Sidebar::className(),
            'event' => \humhub\modules\space\widgets\Sidebar::EVENT_INIT,
            'callback' => [
                'humhub\modules\steam\Events',
                'addSteamFrame'
            ]
        ],
        [
            'class' => \humhub\modules\admin\widgets\AdminMenu::className(),
            'event' => \humhub\modules\admin\widgets\AdminMenu::EVENT_INIT,
            'callback' => [
                'humhub\modules\steam\Events',
                'onAdminMenuInit'
            ]
        ]
    ]
];
?>
