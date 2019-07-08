<h1>Hello Sahmwanga</h1>
<h3>Attempting mysql  connection from php...</h3>

<?php
$host="mysql";
$username="root";
$password="rootpassword";
$db="todo";

$conn =  new mysqli($host, $username, $password,$db);

if($conn->connect_error){
    die('Connection failed: '.$conn->connect_error);
}


echo "Connection to MYSQL Established Successful \n";

$sql="SELECT * FROM my_todo";
$result=mysqli_query($conn,$sql);


while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {

    echo "<p>". $row[0]." ".$row[1]."</p>";  
}


?>