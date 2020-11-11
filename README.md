#simple connect pdo

To install the library, run the following command:

``` sh
composer require devphp-pmro/pdo-conection
```

To use the library, simply require the composer to autoload, invoke the class and call the method:

``` sh

<?php

open the Config.php file in the source folder and enter the credentials for connecting to the database

//define the connection settings to the database for backup


    DEFINE("BD",
           ["host" => "host",
               "data_base" => "data_base",
               "user" => "user",
               "password"=>"password",
               "port"=>"3306"]
        );


default port 3306


in the example_connection directory, connection.php file

 use Source\pdoConection\Conection;

    require_once __DIR__."/../vendor/autoload.php";

    $com = new Conection();

    if(!$com){
        die();
    } else{
        echo "connected";
    }

```

### Developers
* [Leonardo] - Developer of this library!
* [devphp] - Official website: <https://devphp-pmro.github.io/>

License
----
MIT

