<?php
$servername = "localhost"; // Almost all server names are localhost if any change it
$username = ""; // Database Username
$password = ""; // Database Password
$dbname = ""; // Database Name

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

ini_set('user_agent', 'My-Application/2.5');
include_once('simple_html_dom.php');

$html = file_get_html('https://www.example.com/sitemap.xml'); // Your Needed Sitemap Url

foreach($html->find('loc') as $e) {
	$sql = "INSERT INTO `sitemap` (`url`) VALUES ('$e->innertext')";

    if ($conn->query($sql) === FALSE)
      echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
