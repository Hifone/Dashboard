<?php

return [
    'title'   => trans('administrator::dashboard.pages.pages'),
    'single'  => trans('administrator::dashboard.pages.pages'),
    'model'   => 'Hifone\Models\Page',

    'columns' => [
        'id' => [
            'title' => 'ID',
        ],
        'title' => [
            'title'    => '名称',
            'sortable' => false,
        ],
        'slug' => [
            'title'    => 'Slug',
            'sortable' => false,
        ],
        'body' => [
            'title'    => '描述',
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
            'title' => '名称',
        ],
        'slug' => [
            'title' => 'Slug',
        ],
        'body' => [
            'title' => '描述',
            'type'  => 'textarea',
        ],
    ],
    'filters' => [
        'id' => [
            'title' => '标签 ID',
        ],
        'title' => [
            'title' => '名称',
        ],
        'slug' => [
            'title' => 'Slug',
        ],
        'body' => [
            'title' => '描述',
        ],
    ],
    'rules'   => [
        'title' => 'required|min:1|unique:pages'
    ],
    'messages' => [
        'title.unique'   => '页面标题在数据库里有重复，请选用其他名称。',
        'title.required' => '请确保标题至少一个字符以上',
    ],
];