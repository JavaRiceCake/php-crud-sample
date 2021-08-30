<?php
require('./connection.php');

if (isset($_POST['btnDelete'])) {
    $btnDeleteid = $_POST['btnDeleteID'];

    $queryDelete = "DELETE FROM tbemailaccount WHERE id = ' $btnDeleteid'";
    $sqlDelete = $connection->query($queryDelete);

    echo '<script>alert("Delete Success")</script>';
    echo '<script>window.location.href="index.php"</script>';
} else {
    echo '<script>window.location.href="index.php"</script>';
}
