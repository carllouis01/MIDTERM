
<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<style>
	body{

			margin-top: 5%;
			padding: 0;
			background-size: cover;
			background-color:white;
			font-family: 'Poppins', sans-serif;
			background-repeat: no-repeat;		}
    h1 {
            width:500px;
            margin: 0 auto;
            background: white;
            text-align: center;
        }
		button{
			border: none;
			outline: none;
			height: 40px;
			background: ;
			color: white;
			font-size: 18px;
			border border-radius: 20px;
			text-decoration: none;
		}
        button a{
			text-decoration: none;
		}
       
		</style>
	<title>HOME</title>
	
</head>
<body>
	 <br><br><br><br><br>
		<br><br><br>
		<br><br><br><br><br>
		<br><br><br>
	
     <h1>Welcome, <?php echo $_SESSION['username']; ?></h1>
	
   <h1><center><button>  <a href="logout.php">Logout</a> </button></center><br/></h1>
	<h1><center><button type="submit">  <a href="display.php" >View Activity</a> </button></center></h1>

</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>                            		                            