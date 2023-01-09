<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="page.css">
    <title>MainPage</title>
</head>

<body>
    <nav class="navbar sticky-top navbar-light bg-light" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Job Portal</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="login.php">Admin Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register.html">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Signin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <img src="Post_Example__4_.png" alt="Banner" class="img">
        <div class="header">
            <b>
                <h1>Job Portal</h1>
                <p>Apply for Jobs that suits you!</p>
            </b>
        </div>
    </div>

    <section>
        <div class="line">
            <h1>Available jobs</h1>
        </div>
        <div class="row">
            <?php
            include 'connect.php';
            $sql = "SELECT `Company Name`, `Job Description`, `Position`, `Skills`, `CTC` FROM `jobs`";
            $result = mysqli_query($conn, $sql);
            if ($result->num_rows > 0) {
                while ($rows = $result->fetch_assoc()) {
                    echo '
                        <div class= "col-md-4">
                        <div class="job">
                        <h3 style="text-align:center;">' . $rows['Position'] . '</h3> <br>
                        <h4 style="text-align:center;">' . $rows['Company Name'] . '</h4>
                        <p style="text-align:center;">' . $rows['Job Description'] . '</p>
                        <p style="text-align:center;">' . $rows['Skills'] . '</p>
                        <p style="text-align:center;">' . $rows['CTC'] . '</p>
                        <center>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Apply</button></center>
                        </div>
                        </div>';
                }
            }
            ?>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Fill Details</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="configure.php">
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Name</label>
                                    <input type="text" class="form-control" id="recipient-name" name="name">
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Phone No.</label>
                                    <input type="number" class="form-control" id="recipient-name" name="phone">
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Company Name</label>
                                    <input type="text" class="form-control" id="recipient-name" name="cname">
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Qualifications</label>
                                    <input type="text" class="form-control" id="recipient-name" name="qualification">
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">CTC</label>
                                    <input type="text" class="form-control" id="recipient-name" name="ctc">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary" name="Apply">submit</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- <footer>
                <div class="p-3 mb-2 bg-secondary text-white">Footer</div>
            </footer> -->

        <!-- <img src="http://images.ctfassets.net/keiomil1rdyy/7luX7ydHkGihTIQERS3Igf/6e91679a61b9f7dfd24b0abb1b2feb20/Post_Example__4_.png?w=1920&h=1080&q=50&fit=scale" alt="Image"> -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>