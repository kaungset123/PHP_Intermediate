<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3ef3f64a4042e3592f55fcb39e6402eb
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'apply\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'apply\\' => 
        array (
            0 => __DIR__ . '/../..' . '/apply',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3ef3f64a4042e3592f55fcb39e6402eb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3ef3f64a4042e3592f55fcb39e6402eb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3ef3f64a4042e3592f55fcb39e6402eb::$classMap;

        }, null, ClassLoader::class);
    }
}
