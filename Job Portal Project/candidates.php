<?php include 'header.php' ?>
<div class="can">
<div class="table1">
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">Sr No.</th>
                <th scope="col">Name</th>
                <th scope="col">Phone No.</th>
                <th scope="col">Company Name</th>
                <th scope="col">Qualifications</th>
                <th scope="col">CTC</th>
            </tr>
        </thead>
        <tbody>
            <?php include 'connect.php';
            // $conn = mysqli_connect('localhost', 'root', 'password', 'jobs');

            // if ($conn->connect_error) {
            // echo "Connection Error!\n";
            // } else {
            // echo "Available Jobs Description";
            // }

            $sql = "SELECT `Name`,`Phone No`,`Company Name`,`Qualification`,`CTC` FROM `candidates`";
            $result = mysqli_query($conn, $sql);
            $i = 0;
            if ($result->num_rows > 0) {
            while ($rows = $result->fetch_assoc()) {

            echo "
            <tr>
                <td>" . ++$i . "</td>
                <td>" . $rows['Name'] . "</td>
                <td>" . $rows['Phone No'] . "</td>
                <td>" . $rows['Company Name'] . "</td>
                <td>" . $rows['Qualification'] . "</td>
                <td>" . $rows['CTC'] . "</td>
            </tr>";
            }
            } else {
            echo "";
            }
            ?>

        </tbody>
    </table>
    <br><br><br>
    
</div>
<center>
    <a class="btn btn-primary" href="index.php" role="button">Home</a>
    </center>
    </div>
</body>

</html>