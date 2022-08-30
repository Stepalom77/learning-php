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
    
</body>
</html>