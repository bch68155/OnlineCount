<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit333d42099a88c42b4404b5bc813db981
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Workerman\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Workerman\\' => 
        array (
            0 => __DIR__ . '/..' . '/workerman/workerman',
            1 => __DIR__ . '/..' . '/workerman/workerman-for-win',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit333d42099a88c42b4404b5bc813db981::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit333d42099a88c42b4404b5bc813db981::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
