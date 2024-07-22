<?php

return [
    'qr' => [
        'type' => 'qr',
        'title' => 'Crud sample title',
        'model' => 'Qr',
        'rules' => [
            'user_id' => 'required',
            'code' => 'required'
        ]
    ]
];
