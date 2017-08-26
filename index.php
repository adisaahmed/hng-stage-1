<?php
	$connection = mysqli_connect('localhost', 'root', 'Olarewaju');
	if (!$connection) {
		die("Database Connection Failed" . mysqli_error($connection));
	}

	 
	$select_db = mysqli_select_db($connection, 'test');
	    if (!$connection) {
	    die("Unable To Select_db" . mysqli_error($connection));
	}


	$query = "SELECT * FROM test_table ORDER by ID";
    $query_result = mysqli_query($connection, $query);


    while($row = mysqli_fetch_array($query_result, MYSQLI_ASSOC))
	{
	  $username = $row['username'];
	  $email = $row['email'];
	  $password = $row['password'];
	  $date = $row['post_date'];
	  
	  $username = htmlspecialchars($row['username'],ENT_QUOTES);
	  $email = htmlspecialchars($row['email'],ENT_QUOTES);
	  
	  echo "  <div style='margin:30px 0px;'>
	      Name: $username<br />
	      Email: $email<br />
	      Password: $password<br />
	      Date: $date
	    </div>
	  ";
	}

	mysqli_close($connection);
?>