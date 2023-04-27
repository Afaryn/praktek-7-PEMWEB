<html>
    <head>
        <title>DATA PEGAWAI</title>
    </head>
    <body>
        <h1>Pembuatan database data pegawai</h1>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "admin";
        $dbname = "data_pegawai";
        $conn = mysqli_connect($servername,$username,$password);

        //check connection 
        if (mysqli_connect_errno()){
            echo "Failed to connect to MySQL: ".mysqli_connect_error();
            exit();
        }

        // create database 
        $sql = "CREATE DATABASE $dbname";
        if(mysqli_query($conn, $sql)){
            echo "DATABASE Created successfully";
        } else{
            echo "Error creating database : ". mysqli_error($conn);
        }
        mysqli_close($conn);

        // create table
        $connDb= mysqli_connect($servername,$username,$password,$dbname);
            //table department
        $sql = "CREATE TABLE department (
            id_dp INT(10) AUTO_INCREMENT PRIMARY KEY,
            kode_depar VARCHAR(10) NOT NULL,
            nama_depar VARCHAR(100) NOT NULL)";
        if(mysqli_query($connDb, $sql)){
            echo "department Table Created successfully";
        } else{
            echo "Error creating Table : ". mysqli_error($conn);
        }
            //table employee
        $sql = "CREATE TABLE employee (
            id_em INT(10) AUTO_INCREMENT PRIMARY KEY,
            id_department INT(10) NOT NULL,
            nama VARCHAR(200) NOT NULL,
            email VARCHAR(50) NOT NULL,
            alamat TEXT,
            KEY employee_FK (id_department),
            CONSTRAINT employee_FK FOREIGN KEY (id_department) REFERENCES department(id_dp)
        );";
        if(mysqli_query($connDb, $sql)){
            echo "employee Table Created successfully";
        } else{
            echo "Error creating Table : ". mysqli_error($conn);
        }
        ?>
    </body>
</html>