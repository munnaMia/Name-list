<?php
    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "name_list";
    $connection = "";

    try{
        $connection = mysqli_connect(   $db_server, 
                                    $db_user,
                                    $db_pass,
                                    $db_name);
    }catch(mysqli_sql_exception){
        echo "Erorr : Database not conntecting!";
    }

?>