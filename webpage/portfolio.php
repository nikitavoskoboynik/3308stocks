<? 
	session_start();
	include('functions.php'); 

?>

<!doctype html>
<html>

<head>
	<title>3308 Stock Game</title>
	<link href="master.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div id="container">
	<div id="banner">
		<a href = "index.html"><img src="images/NYSE_Banner.png" alt="New York Stock Exchange Banner" width="944px" height="120px"></a>
		<!--<div id="bText">3308 Stock Game</div>-->
	</div><!--banner end-->
	
	<div id="navBar">
			<h1>
				3308 Stock Game
	</h1>
			<ul>
				<li><a href="#">Portfolio</a></li>
				<li><a href="#">Search</a></li>
				<!-- <li><a href="#">Forth Tab</a></li>-->
			</ul>

	</div><!--navBar end-->


	<div id="content">	
		<!-- <h2>
			Current Page Name
		</h2> -->
		<div id="clear"></div>
		<div id="leftContent">
			<p>
				Hello, <?php
				echo $_SESSION['user_logged_in'];
				?> 
			</p>
			<div id="searchBar">
				Search Bar will go here
			</div>

		</div><!--leftContent end-->
		
		<div id="centerContent">
			<?php getStockByUserId($_SESSION['userID']); ?>
		</div>
		<!-- Right content here if needed. -->
		<div id="clear"></div>



	</div><!--content end-->
</div><!--container end-->

</body>

</html>






<!--
	extra
	room
	for
	my
	text
	editor
-->