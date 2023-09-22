<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite8ef8737f63d99fce5116bf35dd89eee
{
    public static $prefixLengthsPsr4 = array (
        'h' => 
        array (
            'holder\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'holder\\' => 
        array (
            0 => __DIR__ . '/../..' . '/holder',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'holder\\database\\dbGen' => __DIR__ . '/../..' . '/holder/database/dbGen.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite8ef8737f63d99fce5116bf35dd89eee::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite8ef8737f63d99fce5116bf35dd89eee::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite8ef8737f63d99fce5116bf35dd89eee::$classMap;

        }, null, ClassLoader::class);
    }
}
