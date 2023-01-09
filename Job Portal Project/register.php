<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Signup</title>
    <style>
        body {
            /* background: url("https://i.stack.imgur.com/SvWWN.png"); */
            /* background: url("https://www.cedefop.europa.eu/files/images/headine_job_search_002.jpg"); */
            /* background: url("https://scsi.ie/wp-content/uploads/2020/11/glenn-carstens-peters-npxXWgQ33ZQ-unsplash-2-scaled.jpg"); */
            background: url("https://www.betterteam.com/images/betterteam-job-posting-template-6000x4000-2020127.jpeg?crop=2:1,smart&width=1200&dpr=2");
            background-repeat: no-repeat;
            background-size: 100% 100vh;


        }

        .container {
            width: 35rem;
            height: 42rem;
            margin-top: 3rem;
            margin-left: 50rem;
            color: black;
            /* border: 1px solid black; */
            box-shadow: 3rem 3rem 3rem solid black;
            background-color: white;
            /* box-shadow: 10px 10px 8px 10px white; */
            border-radius: 10px;
            padding: 1.5rem;

        }

        /* form{
            padding: 1.5rem;
            /* border: 2px solid black; */
        /* } */
        button {
            margin-left: 12rem;
        }

        p {
            color: black;
        }

        #login {
            margin-top: 14px;
        }
    </style>
</head>

<body>
    <div class="container">


        <form action="configure.php" method="POST">

            <div class="mb-3">
                <label for="name" class="form-label"> <b>First Name</b></label>
                <input type="text" class="form-control" id="name" aria-describedby="Fname" name="fname">
                <p class="text-danger"> <?php if(isset($error['f'])) {echo $error['f']; } ?> </p>
            </div>

            <div class="mb-3">
                <label for="Lastname" class="form-label"> <b>last Name</b> </label>
                <input type="text" class="form-control" id="lastname" aria-describedby="Lname" name="lname">
                <p class="text-danger"> <?php if(isset($error['l'])) {echo $error['l']; } ?> </p>
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label"> <b>Phone Number</b> </label>
                <input type="text" class="form-control" id="phone" aria-describedby="phone" name="phone">
                <p class="text-danger"> <?php if(isset($error['e'])) {echo $error['e']; } ?> </p>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"> <b>Email address</b></label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                <p class="text-danger"> <?php if(isset($error['p'])) {echo $error['p']; } ?> </p>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"> <b>Password</b></label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                <p class="text-danger"> <?php if(isset($error['ps'])) {echo $error['ps'];} ?> </p>
            </div>

            <button type="submit" class="btn btn-primary" align="center" name="submit">Submit</button><br>

            <p align="center" id="login">Already signup? <a href="login.php">Signin</a></p>
        </form>
    </div>
</body>

</html>