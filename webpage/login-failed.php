<? 
	session_start();
	session_destroy();
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
<p><span style="color:red; text-align:center;">Username or Password Incorrect.<br/> Please try again</span></p>
			<div id="login">
				<form action="validate.php" method="POST">
					<input type="text" name="username" placeholder="username">
					<br>
					<!-- $_POST['username']; -->
					<input type="password" name = "Password" placeholder="Password">
					<br>
					<input type="submit" value="Submit">
				</form>
			</div>

			<div id="searchBar">
				Search Bar will go here
			</div>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam laoreet eros at urna posuere interdum. Praesent in velit vel quam porttitor consequat et in est. Nam risus ante, posuere ac lacinia rhoncus, lobortis quis nisl. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ut ex placerat tortor placerat congue. Sed vehicula est orci, sit amet posuere lacus efficitur quis. Donec commodo sagittis risus porta maximus. Integer ac interdum mi. Ut eu lacinia turpis. Nam imperdiet mi vel massa laoreet blandit. Sed nunc tellus, tempus eget justo ut, consequat finibus magna. Donec odio quam, fringilla quis imperdiet quis, hendrerit in nisl.Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed vulputate sagittis sem, quis tempus enim aliquam eget. Fusce faucibus massa libero, quis tempus mauris lobortis fringilla. Morbi diam sapien, tincidunt nec quam eget, luctus elementum eros. Phasellus tempus dolor at sem 
		</div><!--leftContent end-->
		
		<div id="centerContent">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam laoreet eros at urna posuere interdum. Praesent in velit vel quam porttitor consequat et in est. Nam risus ante, posuere ac lacinia rhoncus, lobortis quis nisl. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ut ex placerat tortor placerat congue. Sed vehicula est orci, sit amet posuere lacus efficitur quis. Donec commodo sagittis risus porta maximus. Integer ac interdum mi. Ut eu lacinia turpis. Nam imperdiet mi vel massa laoreet blandit. Sed nunc tellus, tempus eget justo ut, consequat finibus magna. Donec odio quam, fringilla quis imperdiet quis, hendrerit in nisl. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed vulputate sagittis sem, quis tempus enim aliquam eget. Fusce faucibus massa libero, quis tempus mauris lobortis fringilla. Morbi diam sapien, tincidunt nec quam eget, luctus elementum eros. Phasellus tempus dolor at sem ultrices vulputate id consequat nibh. Suspendisse ligula justo, pretium vitae tempor non, condimentum at erat. Mauris dapibus nisl vitae nunc commodo congue. Mauris venenatis elit libero, et accumsan diam tincidunt eu. Duis sit amet felis eu nibh gravida molestie. Nam vulputate aliquet varius. Phasellus tellus ligula, pretium et hendrerit vitae, vestibulum vitae ante. Cras suscipit eros magna, vel posuere dolor vehicula vel. Vivamus interdum ultrices commodo. Nullam tincidunt accumsan odio nec semper. Nullam viverra placerat euismod. Morbi efficitur ornare suscipit. Cras vestibulum nisi id turpis sodales blandit. Aenean eget purus eros. Nulla non placerat libero, eu vehicula sapien. Etiam eget nulla massa.
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