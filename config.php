<?php

namespace humhub\modules\steam;

return [
    'id' => 'steam',
    'class' => 'humhub\modules\steam\Module',
    'namespace' => 'humhub\modules\steam',
    'events' => [
        [
            'class' => \humhub\modules\dashboard\widgets\Sidebar::class,
            'event' => \humhub\modules\dashboard\widgets\Sidebar::EVENT_INIT,
            'callback' => [
                'humhub\modules\steam\Events',
                'addSteamFrame'
            ]
        ],
        [
            'class' => \humhub\modules\space\widgets\Sidebar::class,
            'event' => \humhub\modules\space\widgets\Sidebar::EVENT_INIT,
            'callback' => [
                'humhub\modules\steam\Events',
                'addSteamFrame'
            ]
        ],
        [
            'class' => \humhub\modules\admin\widgets\AdminMenu::class,
            'event' => \humhub\modules\admin\widgets\AdminMenu::EVENT_INIT,
            'callback' => [
                'humhub\modules\steam\Events',
                'onAdminMenuInit'
            ]
        ]
    ]
];
?>
