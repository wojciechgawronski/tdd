<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3be4068eff82977714dda7dfb1566508
{
    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/src',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->fallbackDirsPsr4 = ComposerStaticInit3be4068eff82977714dda7dfb1566508::$fallbackDirsPsr4;
            $loader->classMap = ComposerStaticInit3be4068eff82977714dda7dfb1566508::$classMap;

        }, null, ClassLoader::class);
    }
}
