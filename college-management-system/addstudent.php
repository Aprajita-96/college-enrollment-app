<?php

?>

<?php
if (isset($_POST['submit'])) {
    $_POST['submit'] = false;
}
?>
    <!-- <br><h1 align="center"> Add Students To The Records</h1><br>
<form method="post" action="addstudent.php" enctype="multipart/form-data">
    
    <table align="center" border="1" style="width:70%; margin-top:40px;"> -->
    <!-- <tr>
        <th>Student Id</th>
        <td><input type="text" name="StudentId" placeholder="Enter StudentId" required></td>
    </tr>
    <tr>
        <th>Full Name</th>
        <td><input type="text" name="name" placeholder="Enter Full Name" required></td>
    </tr> -->
    <!-- <tr>
            <th>percentage</th>
            <td><input type="text" name="percentage" placeholder="Enter percentage" required></td>
        </tr>
        <tr>
            <th>Fee</th>
            <td><input type="text" name="pcon" placeholder="Enter Amount" required></td>
        </tr> -->
    <!-- <tr>
        <th>Subject</th>
        <td> -->
            <!-- <select name="Subject" id="Subject">
  <option value="Advanced Web Services">Advanced Web Services</option>
                            <option value="Database Theory">Database Theory</option>
                            <option value="Software Engineering">Software Engineering</option>
                            <option value="AdvancedAlgo">AdvancedAlgo</option>
                            <option value="AdvancedDB">AdvancedDB</option>
                            <option value="BigData">BigData</option>
                            <option value="CompilerDesign">CompilerDesign</option>
                            <option value="AdvnacedJava">AdvnacedJava</option>
                            <option value="CloudComputing">CloudComputing</option>
                            <option value="Stats">Stats</option>
                            <option value="CyberSecurity">CyberSecurity</option>
                            <option value="MachineLearning">MachineLearning</option>
                        </select></td>
        </tr>
        <tr>
            <th>Image</th>
            <td><input type="file" name="simg" required> </td>
        </tr>
        
        <tr>
            <td colspan="2" align="center"><input type="submit" name="submit" value="Submit"></td>
        </tr>
    </table>
</form> -->
<html>

<body>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="./style.css">
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet" />
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
    <link rel="stylesheet" href="./style.css">

    <section class="h-100 bg-dark">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="card card-registration my-4">
                        <div class="row g-0">
                            <div class="col-xl-6 d-none d-xl-block">
                                <img src="https://www.ucmo.edu/offices/integrated-marketing-and-communications/internal-resources/fac-staff/image-gallery/images/warrensburg/vertical/4x6/d04167983-736.jpg" alt="Sample photo" class="img-fluid" style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                            </div>
                            <div class="col-xl-6">
                                <div class="card-body p-md-5 text-black">
                                    <h3 class="mb-5 text-uppercase">Student Enrollment form</h3>
                                    <form method="post" action="addstudent.php"  enctype="multipart/form-data">
                                    <div class="form-outline mb-4">
                                            <input type="text" id="form3Example97" name="StudentId" class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Example97">Student ID</label>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input type="text" id="form3Example1m" name="fname" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example1m">First name</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input type="text" id="form3Example1n" name="lname" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example1n">Last name</label>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                                            <h6 class="mb-0 me-4">Gender: </h6>

                                            <div class="form-check form-check-inline mb-0 me-4">
                                                <input class="form-check-input" type="radio" name="female" id="femaleGender" value="option1" />
                                                <label class="form-check-label" for="femaleGender">Female</label>
                                            </div>

                                            <div class="form-check form-check-inline mb-0 me-4">
                                                <input class="form-check-input" type="radio" name="male" id="maleGender" value="option2" />
                                                <label class="form-check-label" for="maleGender">Male</label>
                                            </div>

                                        </div>

                                        <div class="form-outline mb-4">
                                            <select class="select" name="Subject" id="Subject">
                                                <option value="1002">Advanced Web Services</option>
                                                <option value="1001">Database Theory</option>
                                                <option value="1003">Software Engineering</option>
                                                <option value="AdvancedAlgo" disabled>AdvancedAlgo</option>
                                                <option value="AdvancedDB">AdvancedDB</option>
                                                <option value="BigData">BigData</option>
                                                <option value="CompilerDesign">CompilerDesign</option>
                                                <option value="AdvnacedJava">AdvnacedJava</option>
                                                <option value="CloudComputing">CloudComputing</option>
                                                <option value="Stats">Stats</option>
                                                <option value="CyberSecurity">CyberSecurity</option>
                                                <option value="MachineLearning">MachineLearning</option>
                                            </select>
                                        </div>


                                        <div class="form-outline mb-4">
                                            <input type="file" type="file" id="simg" name="simg" class="form-control form-control-lg" />
                                        </div>

                                        <!-- <div class="d-flex justify-content-end pt-3"> -->
                                            <button type="button" class="btn btn-light btn-lg">Reset all</button>
                                            <input class="btn btn-warning btn-lg ms-2" type="submit" name="submit" value="Submit">

                                        <!-- </div> -->
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>

<?php

if (isset($_POST['submit'])) {
    $con = mysqli_connect('localhost:3306', 'root', '', 'collegedb');
    if ($con == false) {
        echo "Connection not successful";
    }
    $StudentId = $_POST['StudentId'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $name=$fname." ".$lname;
    $std = $_POST['Subject'];
    $imagename = $_FILES['simg']['name'];
    $tempname = $_FILES['simg']['tmp_name'];

    move_uploaded_file($tempname, "../dataimg/$imagename");
    // $qry = "INSERT INTO `student_ui`(`name`, `Subject`, `StudentId`,`image`) VALUES ('$name','$std','$StudentId','$imagename')";
    $sql1 = "UPDATE student_ui
    SET `name` = '$name',
        `image` = '$imagename',
        `course_id` = '$std'
    WHERE `StudentId` = '$StudentId'";
    $sql2 = "INSERT INTO enrollment (`student_id`, `course_id`) VALUES ('$StudentId', '$std')";
    $run = mysqli_query($con, $sql1);
    $run = mysqli_query($con, $sql2);

    if ($run == true) {
?>
        <script>
            alert('Data Inserted Successfully');
        </script>
<?php
    }
}
?>

