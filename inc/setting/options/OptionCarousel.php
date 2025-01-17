<?php

namespace Puock\Theme\setting\options;

class OptionCarousel extends BaseOptionItem
{

    function get_fields(): array
    {
        return [
            'key' => 'carousel',
            'label' => '幻灯片设置',
            'icon' => 'dashicons-format-gallery',
            'fields' => [
                [
                    'id' => 'index_carousel',
                    'label' => '首页幻灯片',
                    'type' => 'switch',
                    'sdt' => true,
                ],
                [
                    'id' => 'index_carousel_list',
                    'label' => '首页幻灯片列表',
                    'type' => 'dynamic-list',
                    'sdt' => [],
                    'dynamicModel' => [
                        ['id' => 'title', 'label' => '幻灯标题', 'std' => ''],
                        ['id' => 'img', 'label' => '幻灯图片', 'std' => '', 'type' => 'img'],
                        ['id' => 'link', 'label' => '指向链接', 'std' => ''],
                        ['id' => 'blank', 'label' => '新标签打开', 'std' => false, 'type' => 'switch'],
                    ],
                    'showRefId' => 'index_carousel',
                ],
            ],
        ];
    }
}
