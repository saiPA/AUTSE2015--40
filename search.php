<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>SERLER Search</title>
<style>
	h1   {color:red;font-family:verdana;font-size:200%;}
	p    {color:blue;font-family:courier;font-size:120%;}
	table {
	    width: 35%;
}
table, td, th {
    	font-size:1.1em;
	border: 1px solid #98bf21;
	padding-top: 5px;
	padding-bottom: 4px;
	   height: 20px;
	   text-align: center;
	   vertical-align: top;
	   margin-top:1px;
	   margin-left:1px;
		backround-color: #A7C942;
}
th{
	color:green;
}
img {
	position: absolute;
    left: 0px;
    top: 0px;
    z-index: -1;
}
#grad1 {
    height: 200px;
    background: -webkit-linear-gradient(left, rgba(255,0,0,0), rgba(255,0,0,1)); /* For Safari 5.1 to 6.0 */
    background: -o-linear-gradient(right, rgba(255,0,0,0), rgba(255,0,0,1)); /* For Opera 11.1 to 12.0 */
    background: -moz-linear-gradient(right, rgba(255,0,0,0), rgba(255,0,0,1)); /* For Firefox 3.6 to 15 */
    background: linear-gradient(to right, rgba(255,0,0,0), rgba(255,0,0,1)); /* Standard syntax (must be last) */
}


	</style>
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
<table>
<tr><td>Title: 
<input type="text" name = "title"><br><br>
AND/OR<br><br>

<select>
<option value ="1">Rating</option>
<option value = "2">Research Method</option>
<option value ="3">Practices</option>
</select>->
<select>
<option value="and">AND</option>
<option value ="or">OR</option>
<option value ="equal">EQUAL TO</option>
</select>->
<input type="text" name ="wildcard"></td></tr><br>
<tr><td><input type="submit" name="submit" id="submit" value="submit"></td></tr>
<br>
</table>
</form>

</body>
</html>