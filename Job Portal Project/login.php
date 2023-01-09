<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>User Login</title>
    <style>
        body {
            /* background: url("https://i.stack.imgur.com/SvWWN.png"); */
            /* background-image: url("https://media.istockphoto.com/id/1368151370/photo/user-typing-login-and-password-cyber-security-concept.jpg?b=1&s=170667a&w=0&k=20&c=wm6YUMs03Bup4_9XcQaX61L711qJxAUExEJp_PWO8gI="); */
            background-image: url("https://images.unsplash.com/photo-1529539795054-3c162aab037a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8bG9naW58ZW58MHx8MHx8&w=1000&q=80");
            background-repeat: no-repeat;
            background-size: 100vw 100vh;
            /* filter: blur(2px); */
        }

        .container {
            width: 35rem;
            height: 20rem;
            margin-top: 5rem;
            margin-left: 32rem;
            /* border: 1px solid black; */
            box-shadow: 3rem 3rem 3rem solid black;
            background-color: white;
            /* box-shadow: 10px 10px 8px 10px white; */
            padding: 1.5rem;
            border-radius: 10px;
        }

        .btn btn-primary {
            margin-left: 12rem;
        }
    </style>
</head>

<body>
    <div class="container">
        <form class="form" method="POST", action="configure.php">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            </div>
            <button type="submit" class="btn btn-primary" name="Login" >Signin</button>
            <p align="center" name="forgot"><a href="password.html">Forgot Password?</a></p>
        </form>
    </div>
</body>

</html>
