<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>SERLER</title>
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
<div id="grad1">
<h1>S.E.R.L.E.R</h1>
</div>
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
<table>
<tr><td><h2><b>Evidence Source</b></h2></td></tr><br>
<tr><td>Bibliographic Info:</td></tr><br>
<tr><td>Title:<input type = "text" name = "title"></td></tr><br>
<tr><td>Author(s):<input type = "text" name = "author"></td></tr><br>
<tr><td>Journal:<input type = "text" name = "journal"></td></tr><br>
<tr><td>Year:<input type = "text" name = "year"></td></tr><br>
<br>
<tr><td>Credibility Rating<br>
1<input type="radio" name="credrating"
   value="1">
2<input type="radio" name="credrating"
   value="2">
3<input type="radio" name="credrating"
   value="3">
4<input type="radio" name="credrating"
   value="4">
5<input type="radio" name="credrating"
   value="5"></td></tr><br>
<tr><td>Reason:<br>
<textarea name = "credreason" style="margin: 0px; width: 335px; height: 136px;"></textarea></td></tr><br>
<tr><td>Rated by:<br>
<input type ="text" name ="credrated"></td></tr><br>
<tr><td>Research Level:<br>
<select>
<option value ="qualitative">Level 1</option>
<option value ="quantitative">Level 2</option>
<option value ="correlation">Level 3</option>
</select></td></tr>  <br><br>
<tr><td>Practice(s):<br>
<select>
<option value ""></option>
<option value ="waterfall">TDD</option>
<option value ="prototype">Re-factoring</option>
<option value ="increment">Retrospective</option>
<option value ="spiral">Standup</option>
<option value ="rad">Planning Poker</option>
</select></td></tr>  <br><br>
<tr><td><b>Pieces of Evidence</b></td></tr><br>
<tr><td>Benefit/Outcome being tested:<br>
<textarea name ="outcome"style="margin: 0px; width: 335px; height: 136px;"></textarea></td></tr><br>
<tr><td>Context of Study:<br>
<textarea name="context"style="margin: 0px; width: 335px; height: 136px;"></textarea><br>
Who:<br><textarea name="whocontext"style="margin: 0px; width: 200px; height: 50px;"></textarea><br>
When:<br><textarea name="whencontext"style="margin: 0px; width: 200px; height: 50px;"></textarea><br>
Why:<br><textarea name="whycontext"style="margin: 0px; width: 200px; height: 50px;"></textarea><br>
What:<br><textarea name="whatcontext"style="margin: 0px; width: 200px; height: 50px;"></textarea><br>
How:<br><textarea name="howcontext"style="margin: 0px; width: 200px; height: 50px;"></textarea><br></td></tr><br>
<tr><td>Result of Study:<br>
<textarea name ="result"style="margin: 0px; width: 335px; height: 136px;"></textarea></td></tr><br>
<tr><td>Integrity of the implementation of the study: <br>
<textarea name ="integrity"style="margin: 0px; width: 335px; height: 136px;"></textarea></td></tr><br>
<tr><td>Confidence Rating<br>
1<input type="radio" name="rating"
   value="1">
2<input type="radio" name="rating"
   value="2">
3<input type="radio" name="rating"
   value="3">
4<input type="radio" name="rating"
   value="4">
5<input type="radio" name="rating"
   value="5"></td></tr><br>
<tr><td>Reason:<br>
<textarea name ="reason"style="margin: 0px; width: 335px; height: 136px;"></textarea></td></tr><br>
<tr><td>Rated by:<br>
<input type ="text" name ="conrated"></td></tr><br><br>
<tr><td><b>Information about Research Design</b></td></tr><br>
<tr><td>Research Question: <br>
<textarea name ="researchq"style="margin: 0px; width: 335px; height: 136px;"></textarea></td></tr><br>
<tr><td>Research Method:<br>
<select>
<option value ="controlled">Controlled Experiments</option>
<option value ="casestudy">Case Studies</option>
<option value ="survey">Survey Research</option>
<option value ="ethnographies">Ethnographies</option>
<option value ="actionresearch">Action Research</option>
</select></td></tr><br>
<tr><td>Research Metrics:<br>
<textarea name="metrics"style="margin: 0px; width: 335px; height: 136px;"></textarea></td></tr><br>
<tr><td>Participant:<br>
<select>
<option value ="manager">Expert</option>
<option value ="Developer">Novice</option>
<option value ="owner">Student</option>
<option value ="stakeholder">Professional</option>

</select></td></tr><br><br>

<tr><td><input type="submit" name = "submit" value = "submit" ></td></tr>
</table>
</form>
</body>
</html>