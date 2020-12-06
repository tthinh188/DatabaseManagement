<?php include_once('include/config.php'); ?>
<html>
    <head>
    <title>Game Library Database</title>
    <link href="css/main.css" rel="stylesheet" type="text/css">
    </head>
    <body>
    
    <!-- HEADER -->
    <?php include('templates/header.php'); ?>

    <!-- MENU -->
    <?php include('templates/menu.php'); ?>

    <!-- CONTENT -->

    <!--Modifier Buttons-->
	<h3>
    <a href="include/add.inc.php" class="button">Add/Edit Game</a>
	<br>
	<br>
    <a href="include/remove.inc.php" class="button">Remove Game</a>
	<br>
	<br>
	<a href="include/console.inc.php" class="button">Add/Edit Console</a>
    <br>
	<br>
	<a href="include/removeconsole.inc.php" class="button">Remove Console</a>
	<br>
	<br>
	<a href="include/adduser.inc.php" class="button">Add/Edit User</a>
	<br>
	<br>
	<a href="include/removeuser.inc.php" class="button">Remove User</a>
	<br>
	</h3>

    <h2> Game </h2>
	<!-- This section retrieves data about 'game' from the database -->
	<?php
	$query = mysqli_query($sql, "SELECT * FROM game");
	while($row = mysqli_fetch_assoc($query))
	{
	// This is how we formatted the way the data is displayed //
	echo "Game ID: {$row['gameID']} || Game Title: {$row['gameName']} || Price: {$row['gameCost']} || Rating: {$row['gameRating']} || Publisher ID: {$row['pubID']}</br>";
	}?>
    
    <!--Console Info-->
    <h2> Consoles </h2>
	<!-- This is done the same way we handled game. -->
	<?php
	$query = mysqli_query($sql, "SELECT * FROM console");
	while($row = mysqli_fetch_assoc($query))
	{
	echo "Console ID: {$row['consoleID']} || Console Name: {$row['consoleName']} || Year Released: {$row['yearReleased']}</br> ";
	}?>

	<h2> Developer </h2>
	<!-- This is done the same way we handled game. -->
	<?php
	$query = mysqli_query($sql, "SELECT * FROM developer");
	while($row = mysqli_fetch_assoc($query))
	{
	echo "Developer ID: {$row['devID']} || Developer Name: {$row['devName']} </br>";
	}?>
	

    <h2> User </h2>
	<!-- This is done the same way we handled game. -->
	<?php
	$query = mysqli_query($sql, "SELECT * FROM user");
	while($row = mysqli_fetch_assoc($query))
	{
	echo "User ID: {$row['userID']} || User Name: {$row['userName']} || User Game Count: {$row['userGameCount']}</br>";
	}?>
	
	<h2> Game Genre </h2>
	
	<?php
	$query = mysqli_query($sql, "SELECT * FROM game");
	while($row = mysqli_fetch_assoc($query))
	{
		$gameset[] = $row;
	}
	foreach ($gameset as $game) {
		$gameID = $game['gameID'];
		$query = mysqli_query($sql, "SELECT gameGenre FROM gamegenre WHERE gameID IN (SELECT gameID FROM
		game WHERE gameID = '$gameID')");

		echo "<b>{$game['gameName']} </b>:  ";
		while($row = mysqli_fetch_assoc($query)) {
			$gamearray[] = $row['gameGenre'];
		}
		$gamearray = array_unique($gamearray, SORT_REGULAR);
		echo implode(', ', $gamearray);
		$gamearray = array();
		echo "</br>";
	}
	?>
	
	<h2> Publisher </h2>
	<!-- This is done the same way we handled game. -->
	<?php
	$query = mysqli_query($sql, "SELECT * FROM publisher");
	while($row = mysqli_fetch_assoc($query))
	{
	echo "Publisher ID: {$row['pubID']} || Publisher Name: {$row['pubName']} </br>";
	}?>
	
	<h2> Tracked By </h2>
	<!-- This displays the games that a user keeps track of. Our User feature is limited in its current form. -->
	<?php
	$query = mysqli_query($sql, "SELECT * FROM user");
	while($row = mysqli_fetch_assoc($query))
	{
		$userset[] = $row;
	}
	foreach ($userset as $user) {
		$userID = $user['userID'];
		$query = mysqli_query($sql, "SELECT gameName FROM game WHERE gameID IN (SELECT gameID FROM
		trackedby WHERE userID = '$userID')");
		echo "<b>{$user['userName']} </b>:  ";
		while($row = mysqli_fetch_assoc($query)) {
			$gamearray[] = $row['gameName'];
		}
		$gamearray = array_unique($gamearray, SORT_REGULAR);
		echo implode(', ', $gamearray);
		$gamearray = array();
		echo "</br>";
	}
	?>

    <h2> Developed By </h2>
	<!-- This is the same logic as Tracked By, but instead using Developer ID and Game ID to display Developer Names and Game Titles -->
	<?php
	$query = mysqli_query($sql, "SELECT * FROM developer");
	while($row = mysqli_fetch_assoc($query))
	{
		$devset[] = $row;
	}
	foreach ($devset as $dev) {
		$devID = $dev['devID'];
		$query = mysqli_query($sql, "SELECT gameName FROM game WHERE gameID IN (SELECT gameID FROM
		developedby WHERE devID = '$devID')");
		echo "<b>{$dev['devName']} </b>:  ";
		while($row = mysqli_fetch_assoc($query)) {
			$gamearray[] = $row['gameName'];
		}
		$gamearray = array_unique($gamearray, SORT_REGULAR);
		echo implode(', ', $gamearray);
		$gamearray = array();
		echo "</br>";
		
		
	}
	?>
    
    <h2> Operated By </h2>
	<!-- This is the same logic as Tracked By, but instead using Console ID and Game ID to display Console Names and Game Titles -->
	<?php
	$query = mysqli_query($sql, "SELECT * FROM console");
	while($row = mysqli_fetch_assoc($query))
	{
		$resultset[] = $row;
	}
	foreach ($resultset as $console) {
		$consoleID = $console['consoleID'];
		$query = mysqli_query($sql, "SELECT gameName FROM game WHERE gameID IN (SELECT gameID FROM
		operatedby WHERE consoleID = '$consoleID')");
		echo "<b>{$console['consoleName']} </b>:  ";
		while($row = mysqli_fetch_assoc($query)) {
			$gamearray[] = $row['gameName'];
		}
		$gamearray = array_unique($gamearray, SORT_REGULAR);
		echo implode(', ', $gamearray);
		$gamearray = array();
		echo "</br>";
		
	}
	?>
    
    <!-- FOOTER -->
    <?php include('templates/footer.php'); ?>
    </body>
</html>