<?php

use Illuminate\Support\Str;

return [
    'baseUrl'            => '',
    'production'         => false,
    'siteName'           => 'SMPL - Simple, modern PHP framework and libraries',
    'siteDescription'    => '',

    // Algolia DocSearch credentials
    'docsearchApiKey'    => '',
    'docsearchIndexName' => '',

    // navigation menu
    'navigation'         => require_once('navigation.php'),

    // helpers
    'isActive'           => function ($page, $path, $abs = false) {
        $pagePath = $page->getPath();

        if (! str_starts_with($pagePath, '/')) {
            $pagePath = '/' . $pagePath;
        }

        if (! $abs) {
            return str_starts_with($pagePath, $path);
        }

        return $pagePath === $path;
    },
    'isActiveParent'     => function ($page, $menuItem) {
        if (is_object($menuItem) && $menuItem->children) {
            return $menuItem->children->contains(function ($child) use ($page) {
                return trimPath($page->getPath()) == trimPath($child);
            });
        }
    },
    'url'                => function ($page, $path) {
        return Str::startsWith($path, 'http') ? $path : '/' . trimPath($path);
    },
];
