<html>
<head>
</head>
<body>
<h1 align="center" >BIODATA </h1>
<br/>
<table align="center" >
<?php
$name=$_POST['txtname'];
$age=$_POST['txtage'];
$sex=$_POST['sex'];
$add=$_POST['txtadd'];
$email=$_POST['txtemail'];
echo("<tr> <td> NAME </td> <td> <b>:$name </b> </td> </tr> ");
echo("<tr> <td> AGE </td> <td> <b>:$age </b> </td> </tr> ");
echo("<tr> <td> SEX </td> <td> <b>:$sex </b> </td> </tr> ");
echo("<tr> <td> ADDRESS </td> <td> <b>:$add </b> </td> </tr> ");
echo("<tr> <td> EMAIL </td> <td> <b>:$email </b> </td> </tr> ");
?>
</table>
</body>
</html>