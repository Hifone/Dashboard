<?php

return [
    'title'   => trans('administrator::dashboard.photos.photos'),
    'single'  => trans('administrator::dashboard.photos.photos'),
    'model'   => 'Hifone\Models\Photo',

    'columns' => [
        'id' => [
            'title' => 'ID',
        ],
        'image' => [
            'title'    => '图片',
            'output' => function ($value) {
                return empty($value) ? 'N/A' : <<<EOD
    <img src="$value" width="80">
EOD;
            },
            'sortable' => false,
        ],
        'user' => [
            'title'    => '用户',
            'sortable' => false,
            'output'   => function ($value, $model) {
                return admin_link(
                    $model->user->username,
                    'users',
                    $model->user_id
                );
            },
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
        'image' => [
            'title' => '图片',
            'type'  => 'textarea',
        ],
        'user' => [
            'title'              => '用户',
            'type'               => 'relationship',
            'name_field'         => 'username',
            'autocomplete'       => true,
            'search_fields'      => array("CONCAT(id, ' ', username)"),
            'options_sort_field' => 'id',
        ],
    ],
    'filters' => [
        'id' => [
            'title' => '图片 ID',
        ],
        'image' => [
            'title' => '图片',
        ],
        'user' => [
            'title'              => '用户',
            'type'               => 'relationship',
            'name_field'         => 'name',
            'autocomplete'       => true,
            'search_fields'      => array("CONCAT(id, ' ', username)"),
            'options_sort_field' => 'id',
        ],
    ],
];