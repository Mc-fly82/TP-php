<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2e8eab97e8626cd10ab265a4462f1f0d
{
    public static $classMap = array (
        'App\\Helper' => __DIR__ . '/../..' . '/inc09/Helper.php',
        'ComposerAutoloaderInit2e8eab97e8626cd10ab265a4462f1f0d' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit2e8eab97e8626cd10ab265a4462f1f0d' => __DIR__ . '/..' . '/composer/autoload_static.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit2e8eab97e8626cd10ab265a4462f1f0d::$classMap;

        }, null, ClassLoader::class);
    }
}