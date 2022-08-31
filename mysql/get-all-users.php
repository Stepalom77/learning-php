<?php include "db.php";
include "users-controller.php";
require __DIR__ . '/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createUnsafeImmutable(__DIR__);
//$dotenv->load();
//echo $_ENV['HOST'];
?>

<?php include "includes/header.php"; ?>
<body>
    <div class="container">
    <h1 class="text-center">All Users</h1>
        <div class="col-xs-6">
            <pre>
            <?php getAllUsers(); ?>
            </pre>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>