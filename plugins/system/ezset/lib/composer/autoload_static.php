<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit20f464bd461b42d0a3afc7003fa22898
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Asika\\Sitemap\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Asika\\Sitemap\\' => 
        array (
            0 => __DIR__ . '/..' . '/asika/sitemap/src',
        ),
    );

    public static $prefixesPsr0 = array (
        's' => 
        array (
            'stringEncode' => 
            array (
                0 => __DIR__ . '/..' . '/paquettg/string-encode/src',
            ),
        ),
        'P' => 
        array (
            'PHPHtmlParser' => 
            array (
                0 => __DIR__ . '/..' . '/asika/dom-parser/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit20f464bd461b42d0a3afc7003fa22898::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit20f464bd461b42d0a3afc7003fa22898::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit20f464bd461b42d0a3afc7003fa22898::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
