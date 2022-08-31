<?php include "db.php";
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
    if(!$username && !$password) {
        echo "this field cannot be blank";
    };
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