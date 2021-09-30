@formField('input', [
    'name' => 'old_url',
    'label' => 'Old URL',
])

@formField('input', [
    'name' => 'new_url',
    'label' => 'New URL',
])

@formField('select', [
    'name' => 'status',
    'label' => 'Status',
    'default' => 301,
    'options' => [
        [
            'value' => 301,
            'label' => '301 - Moved Permanently'
        ],
        [
            'value' => 302,
            'label' => '302 - Found'
        ],
        [
            'value' => 307,
            'label' => '307 - Temporary Redirect'
        ],
    ],
])
