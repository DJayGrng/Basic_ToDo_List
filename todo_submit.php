<?php
$title = $_GET["title"];
$rb = new PDO("mysql:dbname=todo;host=localhost", "root");
$rb->exec("INSERT INTO todo (Title)
  VALUES ('$title')");
?>
<html>
	<head>
		<title>To-Do List</title>
		<link href="todo.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
	<div class="list">
			Successfully added to To-Do List
	</div>
	<div id="menu">
	<ul>
		<li>
			<a href="add.html">
			<img src="Images/todo.jpg"></img>
				Add A New To-Do
			</a>
		</li>
		<br><br>
		<li>
			<a href="old_todo.html">
			<img src="Images/oldtodo.jpg"></img>
				Check Your Old To-Dos
			</a>
		</li>
		<br><br>
		<li>
			<a href="todo.html">
			<img src="Images/home.jpg"></img>
				Go Back To Home Page
			</a>
		</li>
	</ul>
	</div>
	</body>
</html>