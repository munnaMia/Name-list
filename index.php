<?php
    include ("database.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Name List</title>
</head>
<body>

    <!-- header  -->
    <?php 
        include("views/header.html");
        include("views/form.html");
        include("views/footer.html")
    ?>

</body>
</html>

<?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        // filltering the inputs 
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $regnumber = filter_input(INPUT_POST, "regnumber", FILTER_SANITIZE_NUMBER_INT) ;

        if(empty($username)){
            echo "Please enter a username";
        }
        elseif(empty($regnumber)){
            echo "Please enter a password";
        }
        else{
            $sql = "INSERT INTO userdb(name, reg_number)
                    VALUE('$username', '$regnumber')";

            mysqli_query($connection, $sql);

            echo "You are registered now";
        }
    }
?>


<?php
    // Closing the my sql connection.
    mysqli_close($connection);
?>