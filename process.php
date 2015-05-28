<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
    ob_start();
    include "serlerform.php";
    ob_end_clean();
    $servername = "mysql3.000webhost.com";
    $username="a2472653_serler";
    $password="serler1";
    $DBname="a2472653_serler";
    $vaild = true;
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
    
    
       
    
    $sql = "INSERT INTO serler (title, author, journal, year, credreason, credrated, outcome, context, result, integrity,
	reason, conrated, researchq,metrics)
    VALUES ('{$title}', '{$author}', '{$journal}','{$year}', '{$credreason}', '{$credrated}', '{$outcome}', '{$context}',
	'{$result}', '{$integrity}','{$reason}','{$conrated}','{$researchq}','{$metrics}')";
	
	if ($conn->query($sql) === TRUE) {
            echo "Status updated successfully.\n <br>";
			echo ("Title: ". $title . "<br>" . "Author: ". $author . "<br>". "Journal" . $journal .  "<br>". 
			"Year: ". $year .  "<br>". "Credibility 
			Reason: ". $credreason . "<br>".  "Rated By: ". $credrated. "<br>".  "Outcome". $outcome . "<br>". 
			 "Context: " . $context .  "<br>".  "Result: " .
			$result .  "<br>".  "Integrity: ". $integrity.  "<br>".  "Confidence Reason: " . $reason . "<br>".  "Rated By: " . $conrated.  "<br>". "Research 
			Question: ". $researchq.  "<br>". "Metrics: " . $metrics );
            
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
                }
                    
                       
    
    $conn->close();
	?>
</body>
</html>