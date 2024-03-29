<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4f86e19e5fd192b1ce0beef2d96ba0fa
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Hybridauth\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Hybridauth\\' => 
        array (
            0 => __DIR__ . '/..' . '/hybridauth/hybridauth/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4f86e19e5fd192b1ce0beef2d96ba0fa::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4f86e19e5fd192b1ce0beef2d96ba0fa::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
