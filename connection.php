<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'db_email';

//check the connection
$connection = mysqli_connect($host, $user, $password, $database);
if (mysqli_connect_error()) {
    echo mysqli_connect_error();
}

// //sorting
// // $sort = "ASC";
// // $column = "id";

// if (isset($_GET['column']) && ($_GET['sort'])) {
//     $sort = $_GET['sort'];
//     $column = $_GET['column'];

//     $sort == 'ASC' ? $sort = 'DESC' : $sort = 'ASC';
// }
//query and sql
$queryEmailaccount = "SELECT * FROM tbemailaccount";
$sqlEmailaccount = $connection->query($queryEmailaccount);
