<?php
$servername="localhost";
$username="root";
$password="";
$dbname= "drugdispensingtool";

//create a connection
$conn =new mysqli($servername,$username,$password,$dbname);

//check the connection
if($conn->connect_error){
   die("connection failed:" .$conn->connect_error);
   }
//insert data
$sql = "INSERT INTO patients(p_name,age,address,primary_physician,phoneNumber,email)
VALUES('Jane Mwangi','35','56 lavington', 'John karimba','078898890','mwangiJane@gmail.com')";

//check whether it has been updated
if($conn->query($sql)==TRUE){
echo "New record added successfully";
}else{
echo "Error:".$sql ."<br>".$conn->error;
}
$conn->close();
?>