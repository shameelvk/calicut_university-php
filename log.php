<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        username:<input type="text" name="username"><br>
        Password<input type="password" name="pass"><br>
        <input type="submit" value="submit">
    </form>
</body>

</html>

<?php
$username = $_POST['username'];
$pass = $_POST['pass'];
$con = pg_connect("host=localhost dbname=postgres user=postgres password=123");
if ($con) {
    echo "login complited";
    $qry1 = "insert into login  values ('$username','$pass')";
    $result1 = pg_query($con, $qry1);
}
?>