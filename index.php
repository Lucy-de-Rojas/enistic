<?php


$user = 'root';
$password = '';
$db = 'mysql';
$host = 'localhost';


$db_connect  = new mysqli($host,$user, $password, $db) or die("Unable to connect");


$result = mysqli_query($db_connect,'SELECT * FROM prices');

if(!$result) {
    die("error" . $db_connect->error);
}

echo "
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Enistic</title>
    <!-- favicon: -->
<link rel='shortcut icon' href='Logo.ico' type='image/x-icon'>

<!-- styles: -->
<link rel='stylesheet' href='fonts.css'>
<link rel='stylesheet' href='styles.css'>
</head>
<body>
<h1>enistic</h1>
<h2>Carbon Management</h2>
<div class='wrapperResults'>

<p class='para description header'>Description:</p>
<p class='para price header'>Price</p>
</div>

";







while($row = $result->fetch_assoc()) {
echo "
<div class='wrapperResults'>
<p class='para description'>" . $row["Description"]  .  " </p>
<p class='para price priceCol'>" . $row["price"]    ."                </p>
</div>
";
}




echo "
    
</body>
</html>

";


?>