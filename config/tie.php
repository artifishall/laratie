<?php
return [
    'root'          => base_path('vendor'), // Base directory
    'vendor'        => '', // Your github username. For Example 'vendor' => 'shipu'
    'rootNamespace' => '', // Root Namespace For Example: 'rootNamespace' => 'Shipu'
    /*
    |--------------------------------------------------------------------------
    | Package Stubs
    |--------------------------------------------------------------------------
    |
    | Default package stubs.
    |
    */
    'stubs'         => [
        'path'      => [
            // adding more stub path for customize stub or new stub
            base_path('vendor/shipu/laratie/src/Consoles/stubs'),
        ],
        'default'   => [
            // default stub key here
            'composer',
            'src',
            'config',
            'provider',
            'tests',
        ],
        'root'      => 'src/', // your root folder path which is concat with vendor/package on composer.json
        'structure' => [
//             Example config start
//            'stubKey' => [
//                'namespace' => 'Namespace',
//                'case'  => 'lower or upper or snake or title or camel or kebab or studly', // default studly
//                'path' => 'your_path/folderName',
//                'suffix' => 'FileNameSuffix',
//                'prefix' => 'PrefixFileName',
//                'extension' => 'file extension. dot php as default file extension'
//                'files' => [
//                    //  default file here
//                    'default.extension',
//                    'default.php',
//                    'default.ini',
//                    'default.jpg',
//                    'PACKAGE_NAME.php'
//                ]
//            ],
//             Example config end
            'src'        => 'src/',
            'migration'  => [
                'prefix' => date('Y_m_d_His_'),
                'path'  => 'src/database/migrations',
                'case'  => 'lower',
            ],
            'config'     => [
                'path'  => 'config',
                'case'  => 'lower',
                'files' => [
                    'config.php',
                ],
            ],
            'views'      => 'src/views',
            'events'     => [
                'namespace' => 'Events',
                'path'      => 'src/VENDOR_NAME/PACKAGE_NAME/Events',
            ],
            'jobs'       => [
                'namespace' => 'Jobs',
                'path'      => 'src/VENDOR_NAME/PACKAGE_NAME/Jobs',
            ],
            'exceptions' => [
                'namespace' => 'Exceptions',
                'suffix'    => 'Exception',
                'path'      => 'src/VENDOR_NAME/PACKAGE_NAME/Exceptions',
            ],
            'middleware' => [
                'namespace' => 'Http\Middleware',
                'path'      => 'src/VENDOR_NAME/PACKAGE_NAME/Http/Middleware',
            ],
            'provider'   => [
                'namespace' => 'Providers',
                'suffix'    => 'ServiceProvider',
                'path'      => 'src/VENDOR_NAME/PACKAGE_NAME/Providers',
                'files'     => [
                    'PACKAGE_NAME.php',
                ],
            ],
            'facades'    => [
                'namespace' => 'Facades',
                'suffix'    => 'Facades',
                'path'      => 'src/VENDOR_NAME/PACKAGE_NAME/Facades',
            ],
            'controller' => [
                'namespace' => 'Http\Controllers',
                'suffix'    => 'Controller',
                'path'      => 'src/VENDOR_NAME/PACKAGE_NAME/Http/Controllers',
                'files'     => [
                    'PACKAGE_NAME',
                    'one',
                    'two.php',
                ],
            ],
            'routes'     => [
                'path'  => 'src/routes/',
                'files' => [
                    'routes.php',
                ],
            ],
            'trait'      => [
                'namespace' => 'Traits',
                'path'      => 'src/VENDOR_NAME/PACKAGE_NAME/Traits/',
                'suffix'    => 'Trait',
                'files'     => [
                    'PACKAGE_NAME.php',
                ],
            ],
            'model'      => [
                'namespace' => 'Models',
                'path'      => 'src/VENDOR_NAME/PACKAGE_NAME/Models/',
                'files'     => [
                    'PACKAGE_NAME.php',
                ],
            ],
            'command'    => [
                'namespace' => 'Consoles',
                'suffix'    => 'Command',
                'path'      => 'src/VENDOR_NAME/PACKAGE_NAME/Consoles/',
            ],
            'tests'      => 'tests/',
            'composer'   => [
                'case'      => 'lower',
                'extension' => 'json',
                'files'     => [
                    'composer'
                    // or 'composer.json'
                ],
            ],
        ],
        'replace'   => [
//            'VENDOR_NAME_LOWER'  => 'shipu',
//            'VENDOR_NAME'        => 'Shipu',
        ],
    ],
];
