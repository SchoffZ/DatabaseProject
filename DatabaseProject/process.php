<?php
include_once("conn.php");

$title = $_REQUEST['title'];
$publisher = $_REQUEST['publisher'];
$developer = $_REQUEST['developer'];
$m_release = $_REQUEST['m_release'];
$d_release = $_REQUEST['d_release'];
$y_release = $_REQUEST['y_release'];

$sql = " INSERT INTO games (title, publisher, developer, m_release, d_release, y_release)
VALUES ('$title', '$publisher', '$developer', '$m_release', '$d_release', '$y_release')";
if($conn-> query($sql) === TRUE){
	echo "Success";
} else{
	echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
</body>
</html>