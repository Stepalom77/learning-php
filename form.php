<?php 
if(isset($_POST['submit'])) { //checks if the data that was input by the submit button was receive
    $name = ["Stephano", "Carlo", "Palomino", "Madueno"];
    $minimum = 5;
    $maximum = 10;
    $username = $_POST['username']; //save username to variable
    $password = $_POST['password'];//save password to variables
    //checks min and max characters of username
    if(strlen($username) < $minimum) {
        echo "Username has to be longer than 5 characters";
    };

    if(strlen($username) > $maximum) {
        echo "Username cannot be longer than 10";
    };
    //checks if the username is validated
    if(!in_array($username,$name)) {
        echo "Authorization failed!";
    } else {
        echo "Welcome Admin!";
    }

};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="form.php" method="post"> <!-- Sends information of the form to the form.php file with the post Http method. -->
        <input type="text" name="username" placeholder="Enter Username">
        <input type="password" name="password" placeholder="Enter Password"> 
        <br>
        <input type="submit" name="submit"> <!-- Date that is been send to the form.php file -->
    </form>
</body>
</html>