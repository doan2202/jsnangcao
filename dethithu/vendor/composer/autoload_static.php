<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd38287de16e010eedcabb5f6315aae43
{
    public static $prefixLengthsPsr4 = array (
        'e' => 
        array (
            'eftec\\bladeone\\' => 15,
        ),
        'N' => 
        array (
            'Nguyenvandoan\\Dethithu\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'eftec\\bladeone\\' => 
        array (
            0 => __DIR__ . '/..' . '/eftec/bladeone/lib',
        ),
        'Nguyenvandoan\\Dethithu\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'B' => 
        array (
            'Bramus' => 
            array (
                0 => __DIR__ . '/..' . '/bramus/router/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd38287de16e010eedcabb5f6315aae43::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd38287de16e010eedcabb5f6315aae43::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitd38287de16e010eedcabb5f6315aae43::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitd38287de16e010eedcabb5f6315aae43::$classMap;

        }, null, ClassLoader::class);
    }
}
