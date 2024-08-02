<?php

return [
    'qr' => [
        'type' => 'qr',
        'title' => 'Crud sample title',
        'model' => 'Qr',
        'rules' => [
            'user_id' => 'required',
            'code' => 'required'
        ],
    ],

    'course' => [
        'type' => 'course',
        'component' => 'edu/Course',
        'relations' => [
            'topic' => []
        ]
    ],
    'topic' => [
        'type' => 'topic',
        'component' => 'edu/Topic',
        'group' => 'edu',
    ]
];
