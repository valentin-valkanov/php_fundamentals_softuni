<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit52a7920d11a5283962768dafdd0bb1ba
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'Group\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Group\\' => 
        array (
            0 => __DIR__ . '/../..' . '/06_objects/Group',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit52a7920d11a5283962768dafdd0bb1ba::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit52a7920d11a5283962768dafdd0bb1ba::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit52a7920d11a5283962768dafdd0bb1ba::$classMap;

        }, null, ClassLoader::class);
    }
}
