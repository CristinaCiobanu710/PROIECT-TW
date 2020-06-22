<?php
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "38511280";
 $db = "tw";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

$username = $_POST['username'];
$password = $_POST['password'];

$sql="select * from register where username='$username' and password='$password'";
$rs=mysqli_query($conn,$sql);


if(empty($username)||empty($password))
{
	echo '<script>
	if(confirm("Toate campurile trebuie completate!")){window.location.href="home.html";} 
	</script>';
}

else if($rs->num_rows==0)
{
	echo '<script>
	if(confirm("Nu exista combinatie utilizator/parola!")){window.location.href="home.html"} 
	</script>';
}

else 
{
	echo '<script>window.location.href="home_al.html"
	</script>';
}

 $conn -> close();
   
?>