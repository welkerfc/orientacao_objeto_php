<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit60d48b509ac0d8be43a219ac0aaec599
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

        spl_autoload_register(array('ComposerAutoloaderInit60d48b509ac0d8be43a219ac0aaec599', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit60d48b509ac0d8be43a219ac0aaec599', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit60d48b509ac0d8be43a219ac0aaec599::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
