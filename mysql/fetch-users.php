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
}

?>