<?php

return [

    /**
     * Provider.
     */
    'provider' => 'lavalite',

    /*
     * Package.
     */
    'package'  => 'calendar',

    /*
     * Modules.
     */
    'modules'  => ['calendar'],

    'calendar' => [
        'model'         => 'Litepie\Calendar\Models\Calendar',
        'table'         => 'calendars',
        'presenter'     => \Litepie\Calendar\Repositories\Presenter\CalendarItemPresenter::class,
        'hidden'        => [],
        'visible'       => [],
        'guarded'       => ['*'],
        'slugs'         => ['slug' => 'title'],
        'dates'         => ['start', 'end', 'deleted_at'],
        'appends'       => [],
        'fillable'      => ['user_id', 'user_type', 'category_id', 'status', 'start', 'end', 'location', 'color', 'title', 'details', 'created_by', 'upload_folder'],
        'translatables' => [],

        'upload_folder' => 'calendar/calendar',
        'uploads'       => [],
        'casts'         => [
        ],
        'revision'      => [],
        'perPage'       => '20',
        'search'        => [
            'name' => 'like',
            'status',
        ],
    ],
];
