<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
</head>
<body>
    <form action="" method="post">
        <h2>Select Operation</h2><br>
        <form action="" method="post">
        Deposit<input type="Radio" name="select" value="deposit">
        Withdrew<input type="Radio" name="select" value=withdrew><br>
       AccountNo: <input type="text" name="accno"><br>
       Ammount: <input type="text" name="amount"><br>
       <input type="submit" value="submit">
        </form>
    </form>
</body>
</html>
<?php
if($_POST){
    $selected=$_POST['select'];
    $accno=$_POST["accno"];
    $amnt=$_POST['amount'];
    $con=pg_connect("host=localhost dbname=postgres user=postgres password=123");
    if($con){
        
         // echo "database connected suchessfully";
        if($selected=='deposit'){
           
            echo "<h2>Account Details Befor transaction</h2><br>";
            $qry="select * from account where accno=$accno";
            $result=pg_query($con,$qry);
            while($row=pg_fetch_row($result)){
                echo "Account No:$row[0]<br>Customer Name:$row[1]<br>Bank Balance:$row[2]<br>";
            }
            $result=pg_query($con,$result);
            $qry1="select amount from account where accno=$accno";
            $result1=pg_query($con,$qry1);
            $row=pg_fetch_row($result1);
            $balance=$row[0]+$amnt;
            $qry2="UPDATE account SET amount=$balance where accno=$accno";
            $result2=pg_query($con,$qry2);
            echo "<h2>Account Details After transaction</h2><br>";
            $result=pg_query($con,$qry);
            while($row=pg_fetch_row($result)){
                echo "Account No:$row[0]<br>Customer Name:$row[1]<br>Bank Balance:$row[2]<br>";
            }
        


        }else{
            echo "<h2>Account Details Befor transaction</h2><br>";
            $qry="select * from account where accno=$accno";
            $result=pg_query($con,$qry);
            while($row=pg_fetch_row($result)){
                echo "Account No:$row[0]<br>Customer Name:$row[1]<br>Bank Balance:$row[2]<br>";
            }
            $result=pg_query($con,$result);
            $qry1="select amount from account where accno=$accno";
            $result1=pg_query($con,$qry1);
            $row=pg_fetch_row($result1);
            $balance=$row[0]-$amnt;
            $qry2="UPDATE account SET amount=$balance where accno=$accno";
            $result2=pg_query($con,$qry2);
            echo "<h2>Account Details After transaction</h2><br>";
            $result=pg_query($con,$qry);
            while($row=pg_fetch_row($result)){
                echo "Account No:$row[0]<br>Customer Name:$row[1]<br>Bank Balance:$row[2]<br>";
            }
        


            
        }
    }else{
        echo "database  not connected";
    }

}
?>