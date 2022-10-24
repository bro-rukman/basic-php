<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        h1 {
            text-align: center;
        }

        input {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button[type=submit] {
            width: 100%;
            background-color: blue;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button[type=submit]:hover {
            background-color: red;
        }

        div.container {
            width: 50%;
            border-radius: 5px;
            padding: 20px;
        }

        div.fluid {
            width: 100%;
            display: flex;
            justify-content: center;
        }
    </style>
</head>

<body>
    <h1>Login</h1>
    <div class="fluid">
        <div class="container">
            <form action="#" method="POST">
                <label for="">Username : </label>
                <input type="text" name="username">
                <label for="">Password : </label>
                <input type="password" name="password">
                <button type="submit" name="submit">Login</button>
            </form>
        </div>
    </div>
    <?php
    include('connection.php');
    $connection = new connection;
    session_start();
    if (isset($_POST['submit'])) {
        $username =  $_POST['username'];
        $password =  $_POST['password'];
        $data = $connection->get_user($username, $password);
        if ($data->num_rows > 0) {
            $_SESSION['username'] = $username;
            $_SESSION['status'] = "login";
            header("location:home.php");
        }
    }
    ?>
</body>

</html>