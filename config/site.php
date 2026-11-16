<?php

return [
    'title' => '演示站点',
    'author' => '',
    # Sitemap 使用此域名作为站点根地址
    'url' => '',
    'description' => '',
    'canonical' => '',
    'og_image' => '',
    'og_locale' => 'zh_CN',
    'nav' => [
        ['label' => '首页', 'url' => '/', 'order' => 10],
        ['label' => '归档', 'url' => '/archives/', 'order' => 20],
        ['label' => '分类', 'url' => '/categories/', 'order' => 30],
        ['label' => '标签', 'url' => '/tags/', 'order' => 40],
    ],
    // Giscus 评论系统（默认关闭，需填写自己的配置 https://giscus.app/）
    'giscus' => [
        'enabled' => false,
        'repo' => '',
        'repo_id' => '',
        'category' => '',
        'category_id' => '',
        'mapping' => 'pathname',
        'strict' => '0',
        'reactions_enabled' => '1',
        'emit_metadata' => '0',
        'input_position' => 'bottom',
        // eager（giscus 默认）立即加载；lazy 等到评论区接近视口再加载
        'loading' => 'lazy',
        // 'auto' = 评论区主题跟随站点主题（推荐）；也可直接填 giscus 主题名固定，如 light / dark
        'theme' => 'auto',
        // theme=auto 时，站点浅色 / 深色分别对应的 giscus 主题
        'theme_light' => 'light',
        'theme_dark' => 'dark',
        'lang' => 'zh-CN',
    ],
];
