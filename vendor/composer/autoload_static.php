<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit67bea25a80007b99b8a995cb545087a6
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'OptionVendor\\OptionPackage\\' => 27,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'OptionVendor\\OptionPackage\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit67bea25a80007b99b8a995cb545087a6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit67bea25a80007b99b8a995cb545087a6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit67bea25a80007b99b8a995cb545087a6::$classMap;

        }, null, ClassLoader::class);
    }
}