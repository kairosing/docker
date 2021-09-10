<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Gallery</title>
    <h1 align="center">My gallery</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h1>Edit Image</h1>
                <img src="/minions_PNG17.png" alt="minions" width="400" height="400">

                <form action="about.php" method="post">
                    <div class="form-control">
                        <input type="text" name="myname"><br>
                    </div>

                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>

</head>
<body>

</body>
</html>
<?php
//$email = "John@example.com";
//$password = "secret";
//
//$pdo = new PDO("mysql:host=mysql;dbname=get_fort","root","root");
//$sql = "INSERT INTO users (email,password) VALUES (:email, :password)";
//$statement = $pdo->prepare($sql);
//$statement->execute([
//    "email" => $email,
//    "password" => $password
//]);
