<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfbc5ccf6a0ec39caceecd452173e69a5
{
    public static $files = array (
        'c65d09b6820da036953a371c8c73a9b1' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/polyfills.php',
    );

    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Facebook\\' => 9,
            'FacebookAds\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Facebook\\' => 
        array (
            0 => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook',
        ),
        'FacebookAds\\' => 
        array (
            0 => __DIR__ . '/..' . '/facebook/php-business-sdk/src/FacebookAds',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfbc5ccf6a0ec39caceecd452173e69a5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfbc5ccf6a0ec39caceecd452173e69a5::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
