<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit551b393d5ba1711fa218497ae7c868ce
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit551b393d5ba1711fa218497ae7c868ce::$classMap;

        }, null, ClassLoader::class);
    }
}
