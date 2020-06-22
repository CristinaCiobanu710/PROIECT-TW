<?php
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "38511280";
 $db = "tw";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['psw'];
$cpassword = $_POST['cpsw'];

if(empty($username)||empty($email)||empty($password)||empty($cpassword))
{
	echo '<script>
	if(confirm("Toate campurile trebuie completate!")){window.location.href="register.html";} 
	</script>';
}

else if($password!=$cpassword)
{
	echo '<script>
	if(confirm("Parolele nu se potrivesc!")){window.location.href="register.html";} 
	</script>';
}

else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
{
	echo '<script>
	if(confirm("Email-ul nu este valid!")){window.location.href="register.html";} 
	</script>';
}

else{
	echo '<script>
	if(confirm("Cont creat cu succes! Va rugam sa va logati pentru a putea continua la site!")){window.location.href="home.html";} 
	</script>';
}

$sql="insert into register(username,email,password,cpassword) values ('$username','$email','$password','$cpassword')";
	
	$rs=mysqli_query($conn,$sql);
	
	if($rs)
	{
		//echo "Succes";
	}

 $conn -> close();
   
?>