<?php include "db.php";
include "users-controller.php";
require __DIR__ . '/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createUnsafeImmutable(__DIR__);
//$dotenv->load();
//echo $_ENV['HOST'];
if(isset($_POST['submit'])){
    updateUser();
};


?>

<?php include "includes/header.php"; ?>
<body>
    <div class="container">
        <div class="col-xs-6">
        <h1 class="text-center">Update</h1>
            <form action="update-user.php" method="post">
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