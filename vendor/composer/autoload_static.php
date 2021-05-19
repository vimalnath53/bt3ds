<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0048d7c9e423b390050e9c91b949ee9f
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Braintree\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Braintree\\' => 
        array (
            0 => __DIR__ . '/..' . '/braintree/braintree_php/lib/Braintree',
        ),
    );

    public static $prefixesPsr0 = array (
        'B' => 
        array (
            'Braintree' => 
            array (
                0 => __DIR__ . '/..' . '/braintree/braintree_php/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0048d7c9e423b390050e9c91b949ee9f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0048d7c9e423b390050e9c91b949ee9f::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit0048d7c9e423b390050e9c91b949ee9f::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
