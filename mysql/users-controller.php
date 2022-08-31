<?php include "db.php";
function getAllUsers() {
    global $connection;
    $selectAll = "SELECT * FROM users";
    $selectResult = mysqli_query($connection, $selectAll);
    if(!$selectResult) {
        die("Get all FAILED");
    };

    while($row = mysqli_fetch_assoc($selectResult)) {
        print_r($row);
   
    };
};

function fetchAllUsers() {
    global $connection;
    $selectAll = "SELECT * FROM users";
    $selectResult = mysqli_query($connection, $selectAll);
    if(!$selectResult) {
        die("Get all FAILED");
    }
    //fetching each user id
    while($row = mysqli_fetch_assoc($selectResult)) {
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
    }
};

function updateUser() {
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "UPDATE users SET username = '$username', password = '$password' WHERE id = '$id'";
    $result = mysqli_query($connection, $query);

    if(!$result) {
        die("Update FAILED!");
    }

};

function createUser() {
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    //cleans data in forms, protects against SQL injections
    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);
    if(!$username) {
        echo "this field cannot be blank";
    } elseif(!$password) {
        echo "this field cannot be blank";
    };
    //hashing password
    $hashFormat = '$5$rounds=5000';
    $salt = 'qfrthyju9ilopjh4mfdert';
    $hash_and_salt = $hashFormat . $salt;
    $password = crypt($password, $hash_and_salt);
//Create user
$query = "INSERT INTO users(username, password) VALUES('$username', '$password')";
$result = mysqli_query($connection, $query);
if(!$result) {
    die("Create FAILED");
}
};

function deleteUser() {
    global $connection;
    $id = $_POST['id'];
    $query = "DELETE FROM users WHERE id = '$id'";
    $result = mysqli_query($connection, $query);

    if(!$result) {
        die("Delete FAILED!");
    }

};

?>