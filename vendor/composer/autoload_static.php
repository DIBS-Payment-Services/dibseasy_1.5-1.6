<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit76fe6fe54fde47e64d22602a3bed570b
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Component\\Yaml\\' => 23,
            'Symfony\\Component\\Filesystem\\' => 29,
            'Symfony\\Component\\EventDispatcher\\' => 34,
            'Symfony\\Component\\DependencyInjection\\' => 38,
            'Symfony\\Component\\Config\\' => 25,
        ),
        'I' => 
        array (
            'Invertus\\DibsEasy\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Component\\Yaml\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/yaml',
        ),
        'Symfony\\Component\\Filesystem\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/filesystem',
        ),
        'Symfony\\Component\\EventDispatcher\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/event-dispatcher',
        ),
        'Symfony\\Component\\DependencyInjection\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/dependency-injection',
        ),
        'Symfony\\Component\\Config\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/config',
        ),
        'Invertus\\DibsEasy\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'G' => 
        array (
            'Guzzle\\Tests' => 
            array (
                0 => __DIR__ . '/..' . '/guzzle/guzzle/tests',
            ),
            'Guzzle' => 
            array (
                0 => __DIR__ . '/..' . '/guzzle/guzzle/src',
            ),
        ),
    );

    public static $classMap = array (
        'DibsOrderPayment' => __DIR__ . '/../..' . '/src/Entity/DibsOrderPayment.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit76fe6fe54fde47e64d22602a3bed570b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit76fe6fe54fde47e64d22602a3bed570b::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit76fe6fe54fde47e64d22602a3bed570b::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit76fe6fe54fde47e64d22602a3bed570b::$classMap;

        }, null, ClassLoader::class);
    }
}
