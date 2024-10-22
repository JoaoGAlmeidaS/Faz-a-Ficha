<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6aadc97b28aec644252b32108fdcaac3
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6aadc97b28aec644252b32108fdcaac3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6aadc97b28aec644252b32108fdcaac3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6aadc97b28aec644252b32108fdcaac3::$classMap;

        }, null, ClassLoader::class);
    }
}
