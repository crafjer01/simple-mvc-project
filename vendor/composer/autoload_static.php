<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf9eefe8045c7840d0043e70b4af62bb4
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf9eefe8045c7840d0043e70b4af62bb4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf9eefe8045c7840d0043e70b4af62bb4::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
