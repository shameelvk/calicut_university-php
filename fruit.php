<html>

<head>
</head>

<body>
    <?php
    $fruit = $_POST["select"];
    switch ($fruit) {
        case "mango":
            echo "mango has been selected";
            break;
        case "apple":
            echo "apple has been selected";
            break;
        case "grape":
            echo "grape has been selected";
            break;
        case "orange":
            echo "orange has been selected";
            break;
    }
    ?>
</body>

</html>