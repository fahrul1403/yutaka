<?php

function connection()
{
    $conn = mysqli_connect('localhost', 'root', '', 'laravel') or die('Connection to database failure!');
    return $conn;
}

function query($query)
{
    $conn = connection();
    $result = mysqli_query($conn, $query) or die('Query Failure' . mysqli_error($conn));
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}


function addPart($data)
{
    $conn = connection();

    if (isset($data['date']) && isset($data['itemName']) && isset($data['itemNumb']) && isset($data['supplierName']) && isset($data['supplierNumb'])) {
        $date = $data['date'];
        $itemName = $data['itemName'];
        $itemNumb = date('itemNumb');
        $supplierName = $data['supplierName'];
        $supplierNumb = $data['supplierNumb'];

        // query insert data
        $query = "INSERT INTO supplierTable (date, itemName, itemNumb, supplierName, supplierNumb) VALUES
                VALUES(null, '$data', '$itemName', '$itemNumb', '$supplierName', '$supplierNumb')";


        // insert data to order table
        mysqli_query($conn, $query) or die('Query Failure' . mysqli_error($conn));


        // return result
        return mysqli_affected_rows($conn);
    }
}
?>