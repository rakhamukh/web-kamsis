<?php 
  $db = mysqli_connect("localhost", "root", "", "webkamsis");

  function query($query) {
  	global $db;
  	$result = mysqli_query($id, $query);
  	$rows = [];
  	while ( $row = mysqli_fetch_assoc($result) ) {
  		$rows[] = $row;
  	}
  	return $rows;
  }

  function register($datauser) {
  	global $db;

  	$nama = htmlspecialchars($datauser["nama"]);
	$username = strtolower(stripcslashes($datauser["username"]));
	$email = htmlspecialchars($datauser["email"]);
	$password = mysqli_real_escape_string($db,$datauser["password"]);
	$repassword = mysqli_real_escape_string($db,$datauser["repassword"]);

	$result = mysqli_query($db, "SELECT username FROM user WHERE username = '$username' ");

	if (mysqli_fetch_assoc($result)) {
		echo "
			<script>
				alert('Username already use')
			<script>";
		return false;
	}

	if ( $password !== $repassword) {
		echo "
			<script>
				alert('Password did not match')
			<script>";
		return false;
	}

	$password = password_hash($password, PASSWORD_DEFAULT);

  	mysqli_query( $db, " INSERT INTO user VALUES ('','$nama', '$username', '$email', '$password') " );

  	return mysqli_affected_rows($db);
  }
?>
