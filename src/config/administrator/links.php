<?php

return [
    'title'   => trans('administrator::dashboard.links.links'),
    'single'  => trans('administrator::dashboard.links.links'),
    'model'   => 'Hifone\Models\Link',

    'columns' => [
        'id' => [
            'title' => 'ID',
        ],
        'title' => [
            'title'    => '名称',
            'sortable' => false,
        ],
        'url' => [
            'title'    => '链接',
            'sortable' => false,
        ],
        'cover' => [
            'title'    => '图片',
            'output' => function ($value) {
                return empty($value) ? 'N/A' : <<<EOD
    <img src="$value" width="180">
EOD;
            },
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
        'title' => [
            'title'    => '名称',
        ],
        'url' => [
            'title'    => '链接',
        ],
        'cover' => [
            'title'    => '图片',
        ],
    ],
    'filters' => [
        'id' => [
            'title' => '标签 ID',
        ],
        'title' => [
            'title' => '名称',
        ],
    ],
];