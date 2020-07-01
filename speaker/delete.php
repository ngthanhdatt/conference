<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['id'])) {$id = $_GET['id'];}
    include '../database/database.php';

    $sql_delete = "DELETE FROM speaker WHERE ID = $id";
    $conn->exec($sql_delete);
    $conn = null;
    header('location: http://localhost/conference/conference/speaker/display.php',true);
}
?>
