<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0de119f297f3c56f754450bddd10c78d
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Baaane\\ImageUploader\\Tests\\' => 27,
            'Baaane\\ImageUploader\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Baaane\\ImageUploader\\Tests\\' => 
        array (
            0 => __DIR__ . '/../..' . '/tests',
        ),
        'Baaane\\ImageUploader\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0de119f297f3c56f754450bddd10c78d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0de119f297f3c56f754450bddd10c78d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
