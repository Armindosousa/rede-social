<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit558e90ba826e8b85cbb7d6fa31ea84c6
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'FreteMagia\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'FreteMagia\\' => 
        array (
            0 => __DIR__ . '/../..' . '/FreteMagia',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit558e90ba826e8b85cbb7d6fa31ea84c6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit558e90ba826e8b85cbb7d6fa31ea84c6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit558e90ba826e8b85cbb7d6fa31ea84c6::$classMap;

        }, null, ClassLoader::class);
    }
}