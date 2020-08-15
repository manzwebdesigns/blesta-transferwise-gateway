<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit58c8da8a837d77f37f50f0a9ab7f8b2c
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
        'B' => 
        array (
            'Blesta\\Composer\\Installer\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
        'Blesta\\Composer\\Installer\\' => 
        array (
            0 => __DIR__ . '/..' . '/blesta/composer-installer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit58c8da8a837d77f37f50f0a9ab7f8b2c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit58c8da8a837d77f37f50f0a9ab7f8b2c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}