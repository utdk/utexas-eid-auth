<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitaa55b19785e0c6b18b733c66fc07e801
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'RobRichards\\XMLSecLibs\\' => 23,
        ),
        'P' => 
        array (
            'PantheonSystems\\WPSamlAuth\\Behat\\' => 33,
        ),
        'O' => 
        array (
            'OneLogin\\' => 9,
        ),
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'RobRichards\\XMLSecLibs\\' => 
        array (
            0 => __DIR__ . '/..' . '/robrichards/xmlseclibs/src',
        ),
        'PantheonSystems\\WPSamlAuth\\Behat\\' => 
        array (
            0 => __DIR__ . '/../..' . '/wp-content/plugins/wp-saml-auth/tests/behat/bootstrap',
        ),
        'OneLogin\\' => 
        array (
            0 => __DIR__ . '/..' . '/onelogin/php-saml/src',
        ),
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitaa55b19785e0c6b18b733c66fc07e801::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitaa55b19785e0c6b18b733c66fc07e801::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitaa55b19785e0c6b18b733c66fc07e801::$classMap;

        }, null, ClassLoader::class);
    }
}
