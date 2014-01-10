<?php

    // you can disable registration to the firefox sync server here,
    // by setting ENABLE_REGISTER to false
    // 
    define("ENABLE_REGISTER", true);

    // firefox sync server url, this should end with a /
    // e.g. https://YourDomain.de/Folder_und_ggf_/index.php/
    // 
    define("FSYNCMS_ROOT", "https://URLFFSYNC/index.php/");

    // Database connection credentials
    // 
    define("SQLITE_FILE", "weave_db");
    define("MYSQL_ENABLE", true);
    define("MYSQL_HOST", "localhost");
    define("MYSQL_DB", "yunobase");
    define("MYSQL_USER", "yunouser");
    define("MYSQL_PASSWORD", "yunopass");

    // Use bcrypt instead of MD5 for password hashing
    define("BCRYPT", true);
    define("BCRYPT_ROUNDS", 12);

?>
