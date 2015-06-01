<?php
return [
	'language' => 'zh-CN',//默认语言
	'timeZone' => 'Asia/Shanghai',//时区
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
];
