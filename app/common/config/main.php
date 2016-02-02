<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'view' => [
            'theme' => [
                'basePath' => '@app/themes/spectrum',
                'baseUrl' => '@web/themes/spectrum',
                'pathMap' => [
                    '@oknetsun/axis/views' => '@app/themes/spectrum/axis/views',
                    '@oknetsun/axis/widgets/article/views' => '@app/themes/spectrum/axis/widgets/article/views',
                    '@oknetsun/axis/widgets/category/views' => '@app/themes/spectrum/axis/widgets/category/views',
                ],
            ],
        ],
    ],
    'modules' => [
        
        'axis' => [
            'class' => 'oknetsun\axis\AxisModule',
        ], 

        'admin' => [
            'class' => 'oknetsun\admin\AdminModule',
            // Upload routes
            'routes' => [
                // Base absolute path to web directory
                'baseUrl' => '',
                // Base web directory url
                'basePath' => '@frontend/web',
                // Path for uploaded files in web directory
                'uploadPath' => 'uploads',
            ],
            // Thumbnails info
            'thumbs' => [
                'small' => [
                    'name' => 'Мелкий',
                    'size' => [100, 100],
                ],
                'medium' => [
                    'name' => 'Средний',
                    'size' => [300, 200],
                ],
                'large' => [
                    'name' => 'Большой',
                    'size' => [500, 400],
                ],
            ],
        ],   

    ], 
];
