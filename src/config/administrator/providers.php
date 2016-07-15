<?php

return [
    'title'   => trans('administrator::dashboard.providers.providers'),
    'single'  => trans('administrator::dashboard.providers.providers'),
    'model'   => 'Hifone\Models\Provider',

    'columns' => [
        'id' => [
            'title' => 'ID',
        ],
        'name' => [
            'title'    => '名称',
            'sortable' => false,
        ],
        'slug' => [
            'title'    => '标识',
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
        'name' => [
            'title' => '名称',
            'type'  => 'text',
        ],
        'slug' => [
            'title' => '标识',
            'type'  => 'text',
        ],
    ],
    'filters' => [
        'id' => [
            'title' => 'ID',
        ],
        'name' => [
            'title' => '名称',
        ],
        'slug' => [
            'title' => '标识',
        ],
    ],
];