<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7bb5917c66e55799fc83a7ccdc788f2f
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Raiz\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Raiz\\' => 
        array (
            0 => __DIR__ . '/../../..' . '/lib/Raiz',
        ),
    );

    public static $classMap = array (
        'Raiz\\Calculator\\Calculator' => __DIR__ . '/../../..' . '/lib/Raiz/Calculator/Calculator.php',
        'Raiz\\HTTP\\Response\\JsonResponse' => __DIR__ . '/../../..' . '/lib/Raiz/HTTP/Response/JsonResponse.php',
        'Raiz\\RPN\\Expression' => __DIR__ . '/../../..' . '/lib/Raiz/RPN/Expression.php',
        'Raiz\\RPN\\ExpressionString' => __DIR__ . '/../../..' . '/lib/Raiz/RPN/ExpressionString.php',
        'Raiz\\RPN\\Operators' => __DIR__ . '/../../..' . '/lib/Raiz/RPN/Opeartors.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7bb5917c66e55799fc83a7ccdc788f2f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7bb5917c66e55799fc83a7ccdc788f2f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7bb5917c66e55799fc83a7ccdc788f2f::$classMap;

        }, null, ClassLoader::class);
    }
}