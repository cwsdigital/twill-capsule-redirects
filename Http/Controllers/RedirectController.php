<?php

namespace App\Twill\Capsules\Redirects\Http\Controllers;


use App\Twill\Capsules\Base\ModuleController;

class RedirectController extends ModuleController
{
    protected $moduleName = 'redirects';

    protected $indexOptions = [
        'create' => true,
        'edit' => true,
        'publish' => false, //we treat menus as published by default, setting this to false disallows the us for changing publish status
        'bulkPublish' => false,
        'feature' => false,
        'bulkFeature' => false,
        'restore' => true,
        'bulkRestore' => true,
        'forceDelete' => true,
        'bulkForceDelete' => true,
        'delete' => true,
        'duplicate' => true,
        'bulkDelete' => true,
        'reorder' => false,
        'permalink' => false,
        'bulkEdit' => true,
        'editInModal' => true,
    ];

    protected $titleColumnKey = 'old_url';

    // Columns to show on the index page
    protected $indexColumns = [
        'old_url' => [
            'title' => 'Old URL',
            'field' => 'old_url',
        ],
        'new_url' => [
            'title' => 'New URL',
            'field' => 'new_url',
        ],
        'status' => [
            'title' => 'Status',
            'field' => 'status',
        ]
    ];
}
