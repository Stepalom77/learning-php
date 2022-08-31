<?php include "db.php";
include "users-controller.php";
require __DIR__ . '/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createUnsafeImmutable(__DIR__);
//$dotenv->load();
//echo $_ENV['HOST'];
if(isset($_POST['submit'])){
    deleteUser();
};
?>

<?php include "includes/header.php"; ?>
<body>
    <div class="container">
        <div class="col-xs-6">
        <h1 class="text-center">Delete</h1>
            <form action="delete-user.php" method="post">
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
                <input type="submit" name="submit" value="Delete" class="btn btn-primary">
            </form>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>