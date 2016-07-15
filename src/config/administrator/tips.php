<?php

return [
    'title'   => '小贴士',
    'single'  => '小贴士',
    'model'   => 'Hifone\Models\Tip',

    'columns' => [
        'id' => [
            'title' => 'ID',
        ],
        'body' => [
            'title'    => '内容',
            'sortable' => false,
        ],
        'operation' => [
            'title'  => '管理',
            'output' => function ($value, $model) {
                return $value;
            },
            'sortable' => false,
        ],
    ],
    'edit_fields' => [
        'body' => [
            'title' => '内容',
            'type'  => 'textarea',
        ],
    ],
    'filters' => [
        'id' => [
            'title' => '标签 ID',
        ],
        'body' => [
            'title' => '内容',
        ],
    ],
];