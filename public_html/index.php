<h1>Hello Sahmwanga</h1>
<h3>Attempting mysql  connection from php...</h3>

<?php
$host="mysql";
$username="root";
$password="rootpassword";

$conn =  new mysqli($host, $username, $password);
if($conn->connect_error){
    die('Connection failed: '.$conn->connect_error);
}

echo "Connection to MYSQL Established Successful"

?>