<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Table</title>
</head>

<body>
    <form action="" method='post'>
        <label>Reg No:</label><input type="text " name="regno"></input>
        <input type="submit" value="Show">
    </form>

</body>

</html>

<?php
if ($_POST) {
    $rg = $_POST['regno'];
    echo $rg;
    $con = pg_connect("host=localhost dbname=postgres user=postgres password=123");

    if ($con) {
        echo "database connected";
        $qry = "select * from stud where roll_no=$rg";
        $result = pg_query($con, $qry);
        // $no = pg_num_rows($result);
        //var_dump($result);
        while ($row = pg_fetch_row($result)) {
            echo "<br/>";
            echo "Roll NO: $row[0]<br> Name:$row[1] <br>Mark:$row[2] Grade:$row[3]<br>";
        }
    }


}

?>