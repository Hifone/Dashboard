<?php

/*
 * This file is part of Hifone.
 *
 * (c) Hifone.com <hifone@hifone.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

    'dashboard' => '控制台',
    'overview'  => [
        'title'       => '概况',
        'systemstate' => [
            'title'      => '系统状态',
            'statistics' => '统计',
            'modules'    => '组件',
            'system'     => '系统',
        ],
        'messages'  => [
            'title'          => '最新动态',
            'newest_threads' => '最新话题',
            'newest_replies' => '最新回帖',
            'newest_users'   => '新进用户',
        ],
    ],

    'content' => [
        'content'       => '内容',
        'thread_title'  => '标题',
        'node'          => '节点',
        'created_by'    => '发帖人',
        'reply_count'   => '回帖',
        'created_at'    => '时间',
        'actions'       => '操作',
        'reply'         => '标题',
    ],
    'pages' => [
        'pages'   => '页面',
        'slug'    => '路径',
        'title'   => '标题',
        'body'    => '内容',
        'add'     => [
            'title'   => '添加页面',
            'success' => '页面添加成功.',
        ],
        'edit'     => [
            'title'   => '编辑页面',
            'success' => '页面更新成功.',
        ],
    ],
    'photos' => [
        'photos' => '图片',
    ],
    'threads'  => [
        'threads' => '话题',
        'add'     => [
            'title'   => '添加话题',
            'success' => '话题添加成功.',
        ],
        'edit' => [
            'title'   => '编辑话题',
            'success' => '话题更新成功.',
        ],
    ],
    'replies' => [
        'replies' => '回帖',
        'edit'    => [
            'title' => '编辑回贴',
        ],
    ],
    'tags' => [
        'tags' => '标签',
    ],

    'sections' => [
        'sections'     => '分类',
        'name'         => '名称',
        'order'        => '排序',
        'description'  => '描述',
        'add'          => [
            'title'   => '添加分类',
            'message' => '暂无分类',
            'success' => '分类添加成功。',
            'failure' => '分类添加失败！',
        ],
        'edit' => [
            'title'   => '编辑分类',
            'success' => '分类信息更新成功。',
            'failure' => '分类更新失败！',
        ],
    ],
    'nodes' => [
        'nodes'           => '节点',
        'name'            => '名称',
        'parent'          => '所属节点',
        'root'            => '根节点',
        'status_name'     => '状态',
        'description'     => '描述',
        'icon'            => '节点图标',
        'slug'            => 'Slug',
        'slug_help'       => '快捷路径',
        'select_category' => '请选择分类',
        'add'             => [
            'title'   => '添加节点',
            'success' => '节点添加成功。',
            'failure' => '节点添加失败！',
        ],
        'edit' => [
            'title'   => '编辑节点',
            'success' => '节点信息更新成功。',
            'failure' => '节点更新失败！',
        ],

        'status'       => [
            0 => '正常',
            1 => '隐藏',
            2 => '会员可见',
        ],
    ],

    'providers' => [
        'providers' => '第三方接入商',
    ],

    'stats' => [
        'stats' => '统计',
    ],

    'adblocks' => [
        'adblocks' => '广告位类型',
        'name'     => '名称',
        'slug'     => '标识',
        'add'      => [
            'title'   => '添加广告位类型',
            'success' => '广告位类型添加成功.',
        ],
        'edit' => [
            'success' => '广告位类型信息更新成功.',
        ],
    ],
    'adspaces' => [
        'adspaces' => '广告位',
        'name'     => '名称',
        'position' => '位置标识',
        'route'    => '投放范围',
        'add'      => [
            'title'   => '添加广告位',
            'success' => '广告位添加成功.',
        ],
        'edit' => [
            'success' => '广告位信息更新成功.',
        ],
    ],

    'advertisements' => [
        'advertisements' => '广告',
        'name'           => '广告名称',
        'body'           => '广告内容',
        'add'            => [
            'title'   => '添加广告',
            'success' => '广告添加成功.',
        ],
        'edit' => [
            'success' => '广告信息更新成功.',
        ],
    ],

    'tips' => [
        'tips'        => '小贴士',
        'body'        => '内容',
        'status'      => '是否显示',
        'add'         => [
            'title'   => '添加小贴士',
            'success' => '小提示添加成功.',
            'message' => '当前没有小贴士.',
        ],
        'edit' => [
            'title'   => '编辑小贴士',
            'success' => '小贴士更新成功.',
        ],
        'delete' => [
            'success' => '小贴士已删除。',
            'failure' => '小贴士删除失败，请重试。',
        ],
    ],

    'locations' => [
        'locations'        => '热门城市',
        'name'             => '城市名',
        'add'              => [
            'title'   => '添加热门城市',
            'success' => '热门城市添加成功.',
            'message' => '当前没有热门城市.',
        ],
        'edit' => [
            'title'   => '编辑热门城市',
            'success' => '热门城市更新成功.',
        ],
        'delete' => [
            'success' => '热门城市已删除。',
            'failure' => '热门城市删除失败，请重试。',
        ],
    ],

    'users' => [
        'users'       => '用户',
        'user'        => ':email, 注册于 :date',
        'username'    => '用户名',
        'email'       => '邮箱地址',
        'password'    => '密码',
        'description' => '用户列表',
        'search'      => '搜索',
        'roles'       => '所属角色',
        'add'         => [
            'title'   => '注册用户',
            'success' => '用户注册成功.',
            'failure' => '用户注册失败',
        ],
        'edit'     => [
            'title'   => '编辑用户',
            'success' => '用户更新成功.',
        ],
    ],

    'roles' => [
        'roles' => '用户角色',
    ],

    'permissions' => [
        'permissions' => '用户权限',
    ],

    'links' => [
        'links'       => '友情链接',
        'title'       => '网站名称',
        'url'         => '网址',
        'cover'       => 'LOGO地址',
        'description' => '描述',
        'status'      => '是否显示',
        'add'         => [
            'title'   => '添加友情链接',
            'success' => '友情链接添加成功.',
            'message' => '当前没有友情链接.',
        ],
        'edit' => [
            'title'   => '编辑友情链接',
            'success' => '友情链接修改成功.',
        ],
        'delete' => [
            'success' => '友情链接已删除。',
            'failure' => '友情链接删除失败，请重试。',
        ],
    ],

    // Settings
    'settings' => [
        'settings'    => '设置',
        'general'     => [
            'general'                       => '网站设置',
            'images-only'                   => '请上传图片类型的附件。',
            'too-big'                       => '您上传的文件太大了。上传的图像大小应小于:size',
            'site_name'                     => '网站名称',
            'site_domain'                   => '网址',
            'site_logo'                     => '网站logo',
            'site_cdn'                      => 'CDN地址',
            'site_about'                    => '关于我们',
            'threads_per_page'              => '每页显示多少话题',
            'replies_per_page'              => '每页显示多少回帖',
            'new_thread_dropdowns'          => '新建话题快捷选项',
            'footer_html'                   => '页脚(支持HTML)',
            'captcha_login_disabled'        => '登录时无需验证码',
            'captcha_register_disabled'     => '注册时无需验证码',
            'logo'                          => 'Logo设置',
            'logo_help'                     => '推荐使用90*40大小的logo.',
        ],
        'localization' => [
            'localization' => '国际化',
            'language'     => '语言',
            'timezone'     => '时区',
        ],
        'customization' => [
            'customization' => '页面定制',
        ],
        'stylesheet' => [
            'stylesheet' => '自定义样式',
            'custom_css' => '自定义样式表',
        ],
        'aboutus' => [
            'aboutus'    => '关于我们',
            'version'    => 'Hifone版本',
            'php'        => 'PHP版本',
            'webserver'  => 'Web服务器',
            'db'         => '数据库',
            'cache'      => '缓存驱动',
            'session'    => 'Session驱动',
            'team'       => '开发团队',
        ],
        'edit' => [
            'success' => '设置已更新.',
            'failure' => '设置更新失败，请重试。',
        ],
    ],

    // Sidebar footer
    'help'        => '帮助',
    'home'        => '首页',
    'logout'      => '退出',

];