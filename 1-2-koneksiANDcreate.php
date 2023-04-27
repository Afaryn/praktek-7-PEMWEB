<html>
    <head>
        <title>KONEKSI DATABASE MYSQL</title>
    </head>
    <body>
        <h1>DEMO KONEKSI DATABASE MYSQL</h1>
        <?php
        $conn = mysqli_connect("localhost","root","admin");

        //check connection 
        if (mysqli_connect_errno()){
            echo "Failed to connect to MySQL: ".mysqli_connect_error();
            exit();
        }

        // create database 
        $sql = "CREATE DATABASE myDB";
        if(mysqli_query($conn, $sql)){
            echo "DATABASE Created successfully";
        } else{
            echo "Error creating database : ". mysqli_error($conn);
        }
        mysqli_close($conn);
        ?>
    </body>
</html>