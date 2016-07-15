<?php

return [

    'title' => '系统设置',
    'single'=>'系统设置',
    'model'=>'Hifone\Models\Setting',
    'columns'=>[
        'id' => [
            'title' => 'ID',
        ],
        'name' => [
            'title' => 'Name',
        ],
        'value' => [
            'title' => 'Value',
        ],
        'operation' => [
            'title'  => '管理',
            'output' => function ($value, $model) {
                return $value;
            },
            'sortable' => false,
        ],
    ],
    'edit_fields'=>[
        'name' => [
            'type'=>'text',
        ],
        'value' => [
            'type' => 'textarea',
        ],
    ],
    'filters' => [
        'id' => [
            'title' => 'ID',
        ],
        'name' => [
            'title' => '变量名',
        ],
        'value' => [
            'title' => '变量值',
        ],
    ],
];