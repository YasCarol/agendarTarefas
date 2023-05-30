<?php

use Illuminate\Support\Str;

return [

    /*
    |--------------------------------------------------------------------------
    | Default Database Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the database connections below you wish
    | to use as your default connection for all database work. Of course
    | you may use many connections at once using the Database library.
    |
    */ 
    'default' => env('DB_CONNECTION', 'localhost'),

    /*
    |--------------------------------------------------------------------------
    | Database Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the database connections setup for your application.
    | Of course, examples of configuring each database platform that is
    | supported by Laravel is shown below to make development simple.
    |
    |
    | All database work in Laravel is done through the PHP PDO facilities
    | so make sure you have the driver for your particular database of
    | choice installed on your machine before you begin development.
    |
    */

    'connections' => [
        'homolog' => [
            'driver'   => 'mongodb',
            'host'     => env('DB_HOST', 'localhost'),
            'port'     => env('DB_PORT', 27017),
            'database' => env('DB_DATABASE', 'admin'),
            //'username' => env('DB_USERNAME', 'elmo'),
            //'password' => env('DB_PASSWORD', 'Azapers@Elmo267'),
            // 'options'  => [
            //     'database' => 'azapfy3' // sets the authentication database required by mongo 3
            // ]
        ],
        'localhost' => [
            'driver' => 'mysql',
            // 'host' => env('DB_HOST', '172.31.33.146'),
            'host' => env('DB_HOST', 'localhost'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'test'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8',
            'collation' => 'utf8_general_ci',
            'prefix' => '',
            'strict' => true,
            'engine' => null,
        ],
        'api' => [
            'driver'   => 'mongodb',
            'host'     => env('DB_HOST', 'api.azapfy.com.br'),
            'port'     => env('DB_PORT', 1433),
            'database' => env('DB_DATABASE', 'azapfy3'),
            'username' => env('DB_USERNAME', 'elmo'),
            'password' => env('DB_PASSWORD', 'Azapers@Elmo267'),
            'options'  => [
                'database' => 'azapfy3' // sets the authentication database required by mongo 3
            ]
        ],
        'azapgeo' => [
            'driver'   => 'mongodb',
            'host'     => env('DB_HOST', 'homologacao3.azapfy.com.br'),
            'port'     => env('DB_PORT', 1434),
            'database' => env('DB_DATABASE', 'azapGeo'),
            'username' => env('DB_USERNAME', 'elmo'),
            'password' => env('DB_PASSWORD', 'Azapers@Elmo267'),
            'options'  => [
                'database' => 'azapfy3' // sets the authentication database required by mongo 3
            ]
        ],
        'sqlite' => [
            'driver' => 'sqlite',
            'database' => env('DB_DATABASE', database_path('database.sqlite')),
            'prefix' => '',
        ],
        '02510579000168' => [
            'driver' => 'mysql',
            // 'host' => env('DB_HOST', '172.31.33.146'),
            'host' => env('DB_HOST', 'geralservice.azapfy.com.br'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'infoged'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', 'Infominaswrj133'),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8',
            'collation' => 'utf8_general_ci',
            'prefix' => '',
            'strict' => true,
            'engine' => null,
        ],
        'CABRAL' => [
            'driver' => 'mysql',
            'host' => env('DB_HOST', 'cabral.azapfy.com.br'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'infoged'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', 'Infominaswrj133'),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8',
            'collation' => 'utf8_general_ci',
            'prefix' => '',
            'strict' => true,
            'engine' => null,
        ],
        'JOBSON' => [
            'driver' => 'mysql',
            'host' => env('DB_HOST', 'jobson.azapfy.com.br'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'infoged'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', 'Infominaswrj133'),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8',
            'collation' => 'utf8_general_ci',
            'prefix' => '',
            'strict' => true,
            'engine' => null,
        ],
        'mysql' => [
            'driver' => 'mysql',
            // 'host' => env('DB_HOST', '172.31.33.146'),
            'host' => env('DB_HOST', 'localhost'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'infoged'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', 'Infominaswrj133'),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8',
            'collation' => 'utf8_general_ci',
            'prefix' => '',
            'strict' => true,
            'engine' => null,
        ],
        '24455677000182' => [
            'driver' => 'mysql',
            'host' => env('DB_HOST', 'acripel.azapfy.com.br'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'infoged'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', 'Infominaswrj133'),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8',
            'collation' => 'utf8_general_ci',
            'prefix' => '',
            'strict' => true,
            'engine' => null,
        ],
        '10908192000192' => [
            'driver' => 'mysql',
            'host' => env('DB_HOST', 'jmexpress.azapfy.com.br'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'infoged'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', 'Infominaswrj133'),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8',
            'collation' => 'utf8_general_ci',
            'prefix' => '',
            'strict' => true,
            'engine' => null,
        ],
        'mongodb' => [
            'driver'   => 'mongodb',
            'host'     => env('DB_HOST', 'localhost'),
            'port'     => env('DB_PORT', 1433),
            'database' => env('DB_DATABASE', 'azapfyLaravel'),
            'username' => env('DB_USERNAME', ''),
            'password' => env('DB_PASSWORD', ''),
            'options'  => [
                'database' => 'azapfyLaravel' // sets the authentication database required by mongo 3
            ]
        ],
        'sede3' => [
            'driver'   => 'mongodb',
            'host'     => env('DB_HOST', 'sede3.azapfy.com.br'),
            'port'     => env('DB_PORT', 1433),
            'database' => env('DB_DATABASE', 'azapfyLaravel'),
            'username' => env('DB_USERNAME', 'elmo'),
            'password' => env('DB_PASSWORD', 'Azapers@Elmo267'),
            'options'  => [
                'database' => 'azapfyLaravel' // sets the authentication database required by mongo 3
            ]
        ],
        'sede2' => [
            'driver'   => 'mongodb',
            'host'     => env('DB_HOST', 'sede2.azapfy.com.br'),
            'port'     => env('DB_PORT', 1433),
            'database' => env('DB_DATABASE', 'azapfyLaravel'),
            'username' => env('DB_USERNAME', 'elmo'),
            'password' => env('DB_PASSWORD', 'Azapers@Elmo267'),
            'options'  => [
                'database' => 'azapfyLaravel' // sets the authentication database required by mongo 3
            ]
        ],
        'homologacao' => [
            'driver'   => 'mongodb',
            'host'     => env('DB_HOST', 'homologacao.azapfy.com.br'),
            'port'     => env('DB_PORT', 1433),
            'database' => env('DB_DATABASE', 'azapfy'),
            //       'username' => env('DB_USERNAME', 'elmo'),
            //       'password' => env('DB_PASSWORD', 'Azapers@Elmo267'),
            'options'  => [
                'database' => 'azapfy' // sets the authentication database required by mongo 3
            ]
        ],
        'homolog2' => [
            'driver'   => 'mongodb',
            'host'     => env('DB_HOST', 'homologacao.azapfy.com.br'),
            'port'     => env('DB_PORT', 1433),
            'database' => env('DB_DATABASE', 'azapfyLaravel'),
            //       'username' => env('DB_USERNAME', 'elmo'),
            //       'password' => env('DB_PASSWORD', 'Azapers@Elmo267'),
            'options'  => [
                'database' => 'azapfy' // sets the authentication database required by mongo 3
            ]
        ],
     
        'pgsql' => [
            'driver' => 'pgsql',
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '5432'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'schema' => 'public',
            'sslmode' => 'prefer',
        ],

        'sqlsrv' => [
            'driver' => 'sqlsrv',
            'host' => env('DB_HOST', 'localhost'),
            'port' => env('DB_PORT', '1433'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => 'utf8',
            'prefix' => '',
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Migration Repository Table
    |--------------------------------------------------------------------------
    |
    | This table keeps track of all the migrations that have already run for
    | your application. Using this information, we can determine which of
    | the migrations on disk haven't actually been run in the database.
    |
    */

    'migrations' => 'migrations',

    /*
    |--------------------------------------------------------------------------
    | Redis Databases
    |--------------------------------------------------------------------------
    |
    | Redis is an open source, fast, and advanced key-value store that also
    | provides a richer body of commands than a typical key-value system
    | such as APC or Memcached. Laravel makes it easy to dig right in.
    |
    */

    'redis' => [

        'client' => env('REDIS_CLIENT', 'phpredis'),

        'options' => [
            'cluster' => env('REDIS_CLUSTER', 'redis'),
            'prefix' => env('REDIS_PREFIX', Str::slug(env('APP_NAME', 'laravel'), '_') . '_database_'),
        ],

        'default' => [
            'url' => env('REDIS_URL'),
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'password' => env('REDIS_PASSWORD', null),
            'port' => env('REDIS_PORT', 6379),
            'database' => env('REDIS_DB', 0),
        ],

        'cache' => [
            'url' => env('REDIS_URL'),
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'password' => env('REDIS_PASSWORD', null),
            'port' => env('REDIS_PORT', 6379),
            'database' => env('REDIS_CACHE_DB', 1),
        ],

    ],

];
