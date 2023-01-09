<?php include 'header.php' ?>

<div class="content">
    <p>
        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            Post job
        </button>
    </p>
    <div class="collapse" id="collapseExample">
        <div class="card card-body">
            <form method="POST" action="configure.php">
                <div class="mb-3">
                    <label for="companyname" class="form-label">Company Name</label>
                    <input type="text" class="form-control" id="companyname" aria-describedby="companyname" name="cname">
                    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                </div>
                <div class="mb-3">
                    <label for="Job Descriptation" class="form-label">Job Descriptation</label>
                    <textarea class="form-control" id="Job Descriptation" aria-describedby="Job Descriptation" name="job"></textarea>
                    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                </div>
                <div class="mb-3">
                    <label for="Position" class="form-label">Position</label>
                    <input type="text" class="form-control" id="Position" aria-describedby="Position" name="position">
                    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                </div>
                <div class="mb-3">
                    <label for="skills" class="form-label">Skills</label>
                    <input type="text" class="form-control" id="skills" aria-describedby="skills" name="skills">
                    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                </div>
                <div class="mb-3">
                    <label for="CTC" class="form-label">CTC</label>
                    <input type="text" class="form-control" id="CTC" aria-describedby="CTC" name="ctc">
                    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                </div>
                <a href="Dashboard.php"><button type="submit" class="btn btn-primary" name="post">Post Job</button></a>
            </form>
        </div>
    </div>

    <br>
    <div class="table">
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Sr No.</th>
                    <th scope="col">Company Name</th>
                    <th scope="col">Position</th>
                    <!-- <th scope="col">Skills</th> -->
                    <th scope="col">CTC</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'connect.php';
                $sql = "SELECT `Company Name`,`Position`,`CTC` FROM `jobs`";
                $result = mysqli_query($conn, $sql);
                $i = 0;
                if ($result->num_rows > 0) {
                    while ($rows = $result->fetch_assoc()) {

                        echo " 
                            <tr>
                            <td>" . ++$i . "</td>
                            <td>" . $rows['Company Name'] . "</td>
                            <td>" . $rows['Position'] . "</td>
                            <td>" . $rows['CTC'] . "</td>
                            </tr>";
                    }
                } else {
                    echo "";
                }
                ?>

            </tbody>
        </table>
        <br><br>
        <a href="index.php"><button type="button" class="btn btn-primary btn-lg">Home</button></a>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>