<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
    session_start();
    if($_SESSION["message"])
    {
        echo $_SESSION["message"];
        $_SESSION["message"]=null;
    }
    ?>
    <form action="authenticate.php" method="POST">
        <input type="text" name="username" placeholder="enter username">
        <input type="password" name="password" placeholder="enter password">
        <input type="submit" value="login">

    </form>
</body>
</html>