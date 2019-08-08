<?php

	if(isset($_POST["username"]) && isset($_POST["password"]))
	{
		if($_POST["username"] == "priyank" && $_POST["password"] == "pc")
		{
			session_start();
			$_SESSION["user"] = "priyank";
			header("location: /winery/index.php");
		}
	}

?>