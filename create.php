<?php
require('./connection.php');
//check if the btnCreate is click
if (isset($_POST['btnCreate'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $queryCreate = "INSERT INTO tbemailaccount VALUES ('null',' $email',MD5('$password'))";
    $sqlCreate = $connection->query($queryCreate);
    echo '<script>alert("Create Success")</script>';
    echo '<script>window.location.href="index.php"</script>';
} else {
    echo '<script>window.location.href="index.php"</script>';
}
