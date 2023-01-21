<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>
<body>
    <form action="" method="post">
        Iteam code: <input type="text" name="icode"><br>
        Iteam name: <input type="text" name="iname"><br>
        Unit Price: <input type="text" name="price"><br>
        <input type="submit" value="Show">

    </form>
</body>
</html>

<?php

if($_POST){
    $no=$_POST["icode"];
    $name=$_POST["iname"];
    $price=$_POST["price"];
    $con=pg_connect("host=localhost dbname=postgres user=postgres password=123");
    if($con){
        echo "Suchesfully connected";

        $qry1="insert into product  values ('$no','$name',$price)";
        $result1=pg_query($con,$qry1);    
        $qry2="select * from product";
        $result2=pg_query($con,$qry2); 
        echo '<table border=1>';
        echo '<tr><th>Iteam code</th><th>Iteam Name</th><th>Iteam Price</th></tr>';
        while($row=pg_fetch_row($result2)){
          
            echo"<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>";
        }


    }
    else{
        echo "database not connected";
    }

}
?>