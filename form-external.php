<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="form-process.php" method="post"> <!-- Sends information of the form to the form.php file with the post Http method. -->
        <input type="text" name="username" placeholder="Enter Username">
        <input type="password" name="password" placeholder="Enter Password"> 
        <br>
        <input type="submit" name="submit"> <!-- Date that is been send to the form.php file -->
    </form>
</body>
</html>