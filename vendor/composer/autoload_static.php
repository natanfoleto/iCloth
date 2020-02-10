<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6b078328a1612a3b2cec8ab0fcd56c1a
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6b078328a1612a3b2cec8ab0fcd56c1a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6b078328a1612a3b2cec8ab0fcd56c1a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}