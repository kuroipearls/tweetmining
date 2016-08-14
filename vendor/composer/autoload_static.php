<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb167abf09f5fa397cc07263057c990b5
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TweetMining\\' => 12,
        ),
        'A' => 
        array (
            'Abraham\\TwitterOAuth\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TweetMining\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Abraham\\TwitterOAuth\\' => 
        array (
            0 => __DIR__ . '/..' . '/abraham/twitteroauth/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Sastrawi\\' => 
            array (
                0 => __DIR__ . '/..' . '/sastrawi/sastrawi/src',
            ),
        ),
        'N' => 
        array (
            'NlpTools\\' => 
            array (
                0 => __DIR__ . '/..' . '/nlp-tools/nlp-tools/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb167abf09f5fa397cc07263057c990b5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb167abf09f5fa397cc07263057c990b5::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitb167abf09f5fa397cc07263057c990b5::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
