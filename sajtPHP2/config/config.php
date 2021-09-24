
<?php
    define("BASE_URL", "http://localhost/SAJTPHP2prak/sajtPHP2");
    define("ABSOLUTE_PATH", $_SERVER["DOCUMENT_ROOT"]."/SAJTPHP2prak/sajtPHP2");

    define("ENV_FILE", ABSOLUTE_PATH."/config/.env");
    define("LOG_FILE", ABSOLUTE_PATH."/data/log.txt");
    define("GRESKE_FILE", ABSOLUTE_PATH."/data/greske.txt");

    define("SERVER", env("SERVER"));
    define("DATABASE", env("DBNAME"));
    define("USERNAME", env("USERNAME"));
    define("PASSWORD", env("PASSWORD"));

    function env($conn){
        $open = fopen(ENV_FILE, "r");
        $data = file(ENV_FILE);
        $write = "";
        foreach($data as $key=>$value){
            $value1 = explode("=", $value);
            if($value1[0]==$conn){
                $write = trim($value1[1]);
            }
        }
        return $write;
    }
?>

