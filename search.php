<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>SERLER Search</title>
</head>

<body>
<h1> SERLER SEARCH</h1>
<?
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
if($_SERVER["REQUEST_METHOD"]=="POST"){
	$title =$_POST['title'];
	
}
?>
<form method = 'post' action = 'searchprocess.php'>
Title: 
<input type="text" name = "title"><br><br>
AND/OR<br><br>

<select>
<option value ="1">Rating</option>
<option value = "2">Value 2</option>
<option value ="3">Value 3</option>
</select>->
<select>
<option value="and">AND</option>
<option value ="or">OR</option>
<option value ="equal">EQUAL TO</option>
</select>->
<input type="text" name ="wildcard"><br>
<input type="submit" name="submit" id="submit" value="submit">
<br>
</form>

</body>
</html>