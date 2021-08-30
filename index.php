<?php
require('./connection.php');

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
        <form action="create.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
            </div>
            <button type="submit" name="btnCreate" class="btn btn-primary">Create</button>
        </form>
        <br>
        <!-- dropdown-sorting -->

        <br>
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Eamail</th>
                    <th scope="col">password</th>
                    <th scope="col">Edit</th>
                    <th scope="col">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Sorting
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="?column=id&sort=<?php echo $sort ?>">By ID</a></li>
                                <li><a class="dropdown-item" href="?column=email&sort=<?php echo $sort ?>">BY EMAIL</a></li>
                            </ul>
                        </div>
                    </th>
                </tr>
            </thead>
            <tbody>
                <!-- phpcode-added here -->
                <?php while ($result = mysqli_fetch_array($sqlEmailaccount)) {  ?>
                    <tr>
                        <th scope="row"><?php echo $result['id'] ?></th>
                        <td><?php echo $result['email'] ?></td>
                        <td><?php echo $result['password'] ?></td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                <form action="update.php" method="post">
                                    <input type="hidden" name="editid" class="btn btn-danger" value="<?php echo $result['id'] ?>"></input>
                                    <input type="hidden" name="editemail" class="btn btn-danger" value="<?php echo $result['email'] ?>"></input>
                                    <input type="hidden" name="editpassword" class="btn btn-danger" value="<?php echo $result['password'] ?>"></input>
                                    <button type="submit" name="btnEdit" class="btn btn-success">Edit</button>
                                </form>
                                <form action="delete.php" method="post">
                                    <button type="submit" name="btnDelete" class="btn btn-danger">Delete</button>
                                    <input type="hidden" name="btnDeleteID" class="btn btn-danger" value="<?php echo $result['id'] ?>"></input>
                                </form>
                            </div>
                        </td>
                        <td></td>

                    </tr>
                <?php } ?>
                <!-- phpcode-end here -->
            </tbody>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>

</html>