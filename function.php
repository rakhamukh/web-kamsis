<?php 
  $db = mysqli_connect("localhost", "root", "", "webkamsis");


  function register($datauser) {
  global $db;

  $nama = htmlspecialchars($datauser["nama"]);
	$username = strtolower(stripcslashes($datauser["username"]));
	$email = htmlspecialchars($datauser["email"]);
	$password = mysqli_real_escape_string($db,$datauser["password"]);
	$repassword = mysqli_real_escape_string($db,$datauser["password"]);

	$result = mysqli_query($db, "SELECT username FROM user WHERE username = '$username");

	if (mysqli_fetch_assoc($result)) {
		echo "
			<script>
				alert('Username already use')
			<script>
		";
		return false;
	}

	if ( $password !== $repassword) {
		echo "
			<script>
				alert('Password did not match')
			<script>
		";
		return false;
	}

	$password = password_hash($password, PASSWORD_DEFAULT);

	$query = "INSERT INTO user VALUES
            ('$nama', '$username', '$email', '$password')
          ";
  	mysqli_query($db, $query);

  	return mysqli_affected_rows($db);
  }
?>
