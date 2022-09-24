<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit90b6c575a0da5e7b785c05040a413236
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit90b6c575a0da5e7b785c05040a413236::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit90b6c575a0da5e7b785c05040a413236::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit90b6c575a0da5e7b785c05040a413236::$classMap;

        }, null, ClassLoader::class);
    }
}
