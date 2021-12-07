<?php
include_once 'includes/db-connect.php';
include_once 'includes/functions.php';
 
sec_session_start();

if(isset($_SESSION['uid'])){
$uid = preg_replace("/[^0-9]/", "", $_SESSION['uid']); //XSS Security
$user=getUser($uid, $conn);
}

if(isUserLoggedIn($uid,$conn)=="false")
header('Location: ./index.php');


?>
<!DOCTYPE html>
<head>
	
<title>joshua &ndash; Dashboard</title>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<style>
	body {
		background-color: #111;
	}
	h1 {
		font-family: Open Sans, sans-serif;
		font-size: 18px;
		font-weight: 500;
		
		color: #ccc;
	}
	h2 {
		font-family: Arial, sans-serif;
		font-size: 14px;
		font-weight: normal;
		
		color: #ccc;
		
		opacity: 0.7;
	}
	p {
		margin-top: 0px;
		
		font-family: Open Sans, sans-serif;
		font-size: 21px;
		font-weight: 700;
		
		color: #ccc;
	}
	#logout {
		transition: all 250ms;
		
		position: fixed;
		left: 0;
		bottom: 0;
		height: 40px;
		width: 250px;

		outline: none;

		font-size: 12px;

		border: none;
		background-color: #333;
		color: #ccc;
	}
	#logout:hover {
		cursor: pointer;
		
		background-color: #444;
	}

	/* NAVBAR */
	ul {
		position: fixed;
		top: 0;
		left: 0;

		width: 250px;
		height: 100%;

		overflow: auto;
		margin: 0;
		padding: 0;

		list-style-type: none;
		background-color: #222;
	}
	#spacer {
		margin-top: 50px;
	}
	li a {
		font-family: Open Sans, sans-serif;
		font-size: 12px;
		font-weight: 400;

		display: block;
		padding: 10px 30px;

		color: #ccc;
		text-decoration: none;
	}

	li a.active {
		background-color: #333;
	}

	li a:hover {
		background-color: #333;
	}
	#title {
		padding: 8px 16px;
		margin-top: 15px;

		font-family: Open Sans, sans-serif;
		font-size: 16px;
		font-weight: 600;

		color: #ccc;
	}
	#logo {
		margin-top: 50px;
		margin-left: 75px;
	}
	/* NAVBAR */

</style>

</head>

<body>

	<ul>
		<div id="logo"><a href="../index.html"><img src="logo.png" width="75px"></a></div>
		<div id="spacer">
			<li id="title">Overview</li>
			<li><a class="active" href="dashboard.php">Dashboard</a></li>
			<li><a href="upload.php">Upload</a></li>
			<li><a href="viewall.php">View All</a></li>
			<li id="title">Settings</li>
			<li><a href="appearance.php">Appearance</a></li>
			<li><a href="files.php">Files</a></li>
			<li><a href="settings.php">Settings</a></li>
		</div>
	</ul>
	
	<a href="logout.php"><button id="logout">Logout</button></a>

	<div></div>

	<?php
	?>

</body>