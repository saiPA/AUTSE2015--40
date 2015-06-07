<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?
  ob_start();
    include "search.php";
    ob_end_clean();
	
//$servername = "mysql3.000webhost.com";
//$username="a2472653_serler";
//$password="serler1";
//$DBname="a2472653_serler";
$servername = "mysql3.000webhost.com";
$username="a2472653_serler";
$password="serler1";
$DBname="a2472653_serler";
//creating connection
    $conn = @mysqli_connect($servername,$username,$password)
    OR die ("failed to connect");
    @mysqli_select_db($conn,$DBname);
    $query = ("SELECT * FROM serler WHERE title = '$title'");
    $results = @mysqli_query($conn,$query);
    $numrows = mysqli_num_rows($results);
    $error = "Please fix the following errors:<br>";
    //Checking connection
    if($conn ->connect_error){
        die("Connection Failed:". $conn->connect_error);
    }
	$sql ="SELECT * FROM serler WHERE title = {'$title'}";
    if ($conn->query($sql) === TRUE) {
		echo $numrows;
		
	}

else {
                echo "Error: " . $sql . "<br>" . $conn->error;
                }
                    
                       
    
    $conn->close();
?>
</body>
</html>