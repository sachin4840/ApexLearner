<?php

   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', 'chichin');
   define('DB_DATABASE', 'apex');

    function connect_db (){
        $con = mysqli_connect( DB_SERVER , DB_USERNAME , DB_PASSWORD ) or die($con->error);
        $db = mysqli_select_db(DB_DATABASE , $con );
        return $db;
    }


?>
