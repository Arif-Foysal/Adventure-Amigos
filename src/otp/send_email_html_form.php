<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeMohitPandey</title>
</head>
<body>
    <form action="send_email.php" method="post">
        <input type="text" name="username" placeholder="Full name"><br>
        <input type="email" name="email" placeholder="Send To... Email ID"><br>
        <input type="submit" value="Send Email">
    </form>
</body>


<style>
    form {
        position: absolute;
        top: 50%;
        left:50%;
        transform: translate(-50%, -50%);
    }
    input {
        height: 40px;
        width: 300px;
        margin: 5px;
    }
</style>

</html>