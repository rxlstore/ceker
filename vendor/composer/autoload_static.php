<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf070a0a0ada8cb09a82bc028e5a8a951
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf070a0a0ada8cb09a82bc028e5a8a951::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf070a0a0ada8cb09a82bc028e5a8a951::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf070a0a0ada8cb09a82bc028e5a8a951::$classMap;

        }, null, ClassLoader::class);
    }
}
