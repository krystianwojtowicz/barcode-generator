<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit978e7ddfa32597c5521c4b494ca03ebd
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Picqer\\Barcode\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Picqer\\Barcode\\' => 
        array (
            0 => __DIR__ . '/..' . '/picqer/php-barcode-generator/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit978e7ddfa32597c5521c4b494ca03ebd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit978e7ddfa32597c5521c4b494ca03ebd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit978e7ddfa32597c5521c4b494ca03ebd::$classMap;

        }, null, ClassLoader::class);
    }
}
