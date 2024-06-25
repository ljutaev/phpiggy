<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8a969925aa93b345692a448ac8e7a642
{
    public static $files = array (
        '3b69e66fd36140c6051e9a8afe9b8471' => __DIR__ . '/../..' . '/src/App/Config/Routes.php',
        'ab0959ade480c0f1df98808dc938ac53' => __DIR__ . '/../..' . '/src/App/Config/Middleware.php',
    );

    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Framework\\' => 10,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Framework\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Framework',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8a969925aa93b345692a448ac8e7a642::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8a969925aa93b345692a448ac8e7a642::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8a969925aa93b345692a448ac8e7a642::$classMap;

        }, null, ClassLoader::class);
    }
}
