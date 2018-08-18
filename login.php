<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="jquery.js" type="text/javascript"></script>
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
    <form>
        <input type="text" id="username" name="username" placeholder="enter username">
        <input type="password" id="password" name="password" placeholder="enter password">
        <button id="submitBtn" type="button" >Submit</button>

    </form>

    <script>
        $("#submitBtn").click(function()
        {
            var formData = {
                username:document.querySelector('#username').value,
                password:document.querySelector('#password').value
            }

            var ajaxObject = {
                    url:'authenticate.php',
                    data:formData,
                    method:'POST'
            }
            
            $.ajax(ajaxObject).done(ajaxSuccess);

            function ajaxSuccess(data)
            {
                if(data=="success")
                {
                    window.location="form.php";
                    console.log("access provided");
                }
                else
                {
                    console.log(data);
                    console.log("incorrect credentials");
                }
            }
            
        });
        
        
    </script>
</body>
</html>