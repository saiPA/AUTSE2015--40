<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>SERLER</title>
</head>

<body>
<h1>S.E.R.L.E.R</h1>
<?php
$title = $author= $journal= $year=$credreason=$credrated=$outcome=$context=$result=$integrity=
$reason=$conrated=$researchq=$metrics ="";

if($_SERVER["REQUEST_METHOD"]=="POST"){
	$title =$_POST['title'];
	$author=$_POST['author'];
	$journal=$_POST['journal'];
	$year=$_POST['year'];
	$credreason=$_POST['credreason'];
	$credrated=$_POST['credrated'];
	$outcome=$_POST['outcome'];
	$context=$_POST['context'];
	$result=$_POST['result'];
	$integrity=$_POST['integrity'];
	$reason=$_POST['reason'];
	$conrated=$_POST['conrated'];
	$researchq=$_POST['researchq'];
	$metrics=$_POST['metrics']; 
}
?>
<form id="form1" name="form1" method="post" action = "process.php">
<h2><b>Evidence Source</b></h2><br>
Bibliographic Info:<br>
Title:<input type = "text" name = "title"><br>
Author(s):<input type = "text" name = "author"><br>
Journal:<input type = "text" name = "journal"><br>
Year:<input type = "text" name = "year"><br>
<br>
Credibility Rating<br>
1<input type="radio" name="credrating"
   value="1">
2<input type="radio" name="credrating"
   value="2">
3<input type="radio" name="credrating"
   value="3">
4<input type="radio" name="credrating"
   value="4">
5<input type="radio" name="credrating"
   value="5"><br>
Reason:<br>
<textarea name = "credreason"></textarea><br>
Rated by:<br>
<input type ="text" name ="credrated"><br>
Research Level:<br>
<select>
<option value ="qualitative">Qualitative</option>
<option value ="quantitative">Quantitative</option>
<option value ="correlation">Correlation</option>
<option value ="quasi">Quasi-Experimental</option>
<option value ="experimental">Experimental</option>
<option value ="meta">Meta-Analysis</option>
</select>  <br><br>
Practice(s):<br>
<select>
<option value ""></option>
<option value ="waterfall">Waterfall</option>
<option value ="prototype">Prototyping</option>
<option value ="increment">Incremental Development</option>
<option value ="spiral">Spiral</option>
<option value ="rad">RAD</option>
<option value ="agile">Agile</option>
</select>  <br><br>
<b>Pieces of Evidence</b><br>
Benifit/Outcome being tested:<br>
<textarea name ="outcome"></textarea><br>
context of Study:<br>
<textarea name="context"></textarea><br>
Result of Study:<br>
<textarea name ="result"></textarea><br>
Integrity of the implementation of the study: <br>
<textarea name ="integrity"></textarea><br>
Confidence Rating<br>
1<input type="radio" name="rating"
   value="1">
2<input type="radio" name="rating"
   value="2">
3<input type="radio" name="rating"
   value="3">
4<input type="radio" name="rating"
   value="4">
5<input type="radio" name="rating"
   value="5"><br>
Reason:<br>
<textarea name ="reason"></textarea><br>
Rated by:<br>
<input type ="text" name ="conrated"><br><br>
<b>Information about Research Design</b>
<br>
Research Question: <br>
<textarea name ="researchq"></textarea><br>
Research Method:<br>
<select>
<option value ="controlled">Controlled Experiments</option>
<option value ="casestudy">Case Studies</option>
<option value ="survey">Survey Research</option>
<option value ="ethnographies">Ethnographies</option>
<option value ="actionresearch">Action Research</option>
</select><br>
Research Metrics:<br>
<textarea name="metrics"></textarea><br>
Participant:<br>
<select>
<option value ="manager">Project Manager</option>
<option value ="Developer">Developer</option>
<option value ="owner">Product Owner</option>
<option value ="stakeholder">Stake Holder</option>

</select><br><br>

<input type="submit" name = "submit" value = "submit">
</form>
</body>
</html>