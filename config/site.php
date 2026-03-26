<?php

return [
    'title' => '',
    'author' => '',
    # Sitemap 使用此域名作为站点根地址
    'url' => '',
    'description' => '',
    'canonical' => '',
    // Giscus 评论系统（默认关闭，需填写自己的配置）
    'giscus' => [
        'enabled' => false,
        'repo' => '',
        'repo_id' => '',
        'category' => '',
        'category_id' => '',
        'mapping' => '',
        'strict' => '0',
        'reactions_enabled' => '1',
        'emit_metadata' => '0',
        'input_position' => 'bottom',
        'theme' => 'preferred_color_scheme',
        'lang' => 'zh-CN',
    ],
];
