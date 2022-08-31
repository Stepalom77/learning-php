<?php include "db.php";
include "fetch-users.php";
require __DIR__ . '/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createUnsafeImmutable(__DIR__);
//$dotenv->load();
//echo $_ENV['HOST'];
//Update user
/*$query = "INSERT INTO users(username, password) VALUES('$username', '$password')";
$result = mysqli_query($connection, $query);
if(!$result) {
    die("Update FAILED");
}*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="col-xs-6">
            <form action="login.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <br>
                <div class="form-group">
                    <select name="id" id="">
                        <?php 
                        //fetching each id
                        fetchAllUsers();
                        ?> 
                        
                    </select>
                </div>
                <br>
                <input type="submit" name="submit" value="Update" class="btn btn-primary">
            </form>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>