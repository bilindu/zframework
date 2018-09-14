<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd0f63f41661a2077440ca56d982aca96
{
    public static $files = array (
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'Zusers\\' => 7,
            'Zmailer\\' => 8,
        ),
        'T' => 
        array (
            'Twig\\' => 5,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Polyfill\\Ctype\\' => 23,
        ),
        'F' => 
        array (
            'Framework\\' => 10,
        ),
        'C' => 
        array (
            'Controller\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Zusers\\' => 
        array (
            0 => __DIR__ . '/..' . '/zusers/src',
        ),
        'Zmailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/zmailer/src',
        ),
        'Twig\\' => 
        array (
            0 => __DIR__ . '/..' . '/twig/twig/src',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Framework\\' => 
        array (
            0 => __DIR__ . '/../..' . '/libs/Framework',
        ),
        'Controller\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Controller',
        ),
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd0f63f41661a2077440ca56d982aca96::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd0f63f41661a2077440ca56d982aca96::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitd0f63f41661a2077440ca56d982aca96::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
