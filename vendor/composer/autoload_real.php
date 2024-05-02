<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit52a7920d11a5283962768dafdd0bb1ba
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit52a7920d11a5283962768dafdd0bb1ba', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit52a7920d11a5283962768dafdd0bb1ba', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit52a7920d11a5283962768dafdd0bb1ba::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}