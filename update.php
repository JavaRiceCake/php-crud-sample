<?php
require('./connection.php');

if (isset($_POST['btnEdit'])) {
    $editId = $_POST['editid'];
    $editEmail = $_POST['editemail'];
    $editPassword = $_POST['editpassword'];
}

if (isset($_POST['btnUpdate'])) {

    $updatetId = $_POST['updateId'];
    $updateEmail = $_POST['updateemail'];
    $updatePassword = $_POST['updatepassword'];

    $queryUpdate = "UPDATE tbemailaccount SET email=' $updateEmail',password=' $updatePassword' WHERE id = ' $updatetId'";
    $sqlUpdate = $connection->query($queryUpdate);
    echo '<script>alert("Update Success")</script>';
    echo '<script>window.location.href="index.php"</script>';
}



?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INDEX</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <div class="main-container">
        <form action="update.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="updateemail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $editEmail ?>" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="updatepassword" class="form-control" id="exampleInputPassword1" value="<?php echo $editPassword ?>" required>
            </div>
            <button type="submit" name="btnUpdate" class="btn btn-primary">Update</button>
            <input type="hidden" name="updateId" class="btn btn-primary" value="<?php echo $editId ?>"></input>
        </form>