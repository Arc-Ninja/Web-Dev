<?php
$name=$_POST['name'];
$regno=$_POST['regno'];
$conn = new mysqli('localhost','root','','register');
if($conn->connect_error)
{
    die('Connection failed:'.$conn->connect_error);
} 
else{
    $stmt=$conn->prepare("insert into datainfo(Name,RegNo)values(?,?)");     
    $stmt->bind_param("si",$name,$regno);      
    $stmt->execute();
    echo "Registration successful"."<br>";
    $stmt->close();
    }
    $sql = "SELECT Name, RegNo FROM datainfo";
    $result=$conn->query($sql);
    if ($result->num_rows > 0) {
        
        while($row = $result->fetch_assoc()) {                     
          echo "<br>"."Name: " . $row["Name"]. "<br>" ."RegNo: " . $row["RegNo"]. "<br>";
        }
      } else {
        echo "0 results";
      }
    $conn->close();
    ?>