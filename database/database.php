<?php 
$servername ="localhost";
$username ="root";
$password ="root";
$dbname ="astrogamaa";
$port =3306;

//create connection

$conn =mysqli_connect($servername , $username,$password, $dbname, $port);

//check connection
if($conn ==false){
    echo "connection failed";
    die();
}

else{
    echo "you did it xo!!!";
}


?>