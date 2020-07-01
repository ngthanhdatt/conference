<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['id'])) {$id = $_GET['id'];}
    include '../database/database.php';

    $sql_delete = "DELETE FROM customer WHERE ID = $id";
    $conn->exec($sql_delete);
    $conn = null;
    header('location: http://localhost/baitap3/customer/display.php',true);
}
?>
