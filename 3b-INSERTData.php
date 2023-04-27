<?php
$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "myDB";

//create connection 
$conn = mysqli_connect($servername,$username,$password,$dbname);
//check connection 
if(!$conn){
    die("connection failed : ". mysqli_connect_error());
}

//input data
$sql="INSERT INTO liga (kode,negara,champion) VALUES 
('jer','Jerman','4'), ('spa','Spanyol','3'), ('eng','English','3');";
if(mysqli_query($conn, $sql)){
    echo "new recoed Created successfully";
} else{
    echo "Error  : ". $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>