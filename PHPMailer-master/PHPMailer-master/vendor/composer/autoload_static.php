<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit151dd27895501320c1492b30491967df
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit151dd27895501320c1492b30491967df::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit151dd27895501320c1492b30491967df::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
