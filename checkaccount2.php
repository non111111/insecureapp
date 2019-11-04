<html>
<body>

<?php

$username = $_POST["username"];
$password = $_POST["password"];

$dbserver = "localhost";
$dbusername = "insecureapp";
$dbpassword = "45EUlZOpL7";
$db = "insecureapp";

$conn = new mysqli($dbserver, $dbusername, $dbpassword, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


// print account details

$sql = "SELECT * FROM users WHERE userid=? AND password=?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $userid, $password);
$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows > 0) {

	// print heading
	echo "<H1>Your Account</H1>";
	echo "<p>Welcome, your account details are:</p>";

	while($row = $result->fetch_assoc()) {
        echo " <p>Name: " . $row["lastname"]. ", " . $row["firstname"]. " <BR>Address: " . $row["address"]. "<br>Phone number: " . $row["phone"] . "</p>";
    }
}
else
{
echo "<p><b>Login failed</b></p>";
}


$conn->close();


echo "<p><BR><font color=\"red\">" . $sql . "</font></p>";


//https://websitebeaver.com/prepared-statements-in-php-mysqli-to-prevent-sql-injection

?>

</body>
</html>
