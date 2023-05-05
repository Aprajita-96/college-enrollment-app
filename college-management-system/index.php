<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="jquery-3.3.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <title>University Of Central Missouri</title>
    <script>
        $
    </script>

</head>

<body style="
    background-repeat: no-repeat;
    background-size: cover;">
    <nav class="navbar navbar-expand-lg  " style="background-color:darkred">
        <a class="navbar-brand" href="#">
            <img src="https://upload.wikimedia.org/wikipedia/en/thumb/a/a0/University_of_Central_Missouri_seal.svg/1200px-University_of_Central_Missouri_seal.svg.png" width="40" height="40" class="d-inline-block align-top" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Departments</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.ucmo.edu/future-students/tuition-and-costs/">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="modal" data-target="#exampleModal" href="#">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Enrollments
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="addstudent.php"><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModalCenter">
                                Enroll a Course
                            </button></a>
                        <a class="dropdown-item" href="#"><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">
                                cancel Enrollment
                            </button></a>
                    </div>
                </li>
            </ul>
            <!-- <button type="button" class="btn btn-dark"><a href="login.php" style="
    color: white;
    text-decoration: none;">Login</a></button> -->
        </div>
    </nav>
    <h1 align="center" class="mb-4">University Of Central Missouri</h1>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="https://www.ucmo.edu/offices/integrated-marketing-and-communications/internal-resources/fac-staff/image-gallery/images/warrensburg/horizontal/6x4/d01147141-111.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://www.ucmo.edu/offices/integrated-marketing-and-communications/internal-resources/fac-staff/image-gallery/images/warrensburg/horizontal/6x4/d01178200-035.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://www.ucmo.edu/offices/integrated-marketing-and-communications/internal-resources/fac-staff/image-gallery/images/warrensburg/horizontal/6x4/d04178362-152.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div id="accordion">
        <div class="card">
            <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Which Instructor Offers the course?
                    </button>
                </h5>
            </div>

            <div id="collapseOne" class="collapse <?php echo isset($_POST['submit_ins']) ? 'show' : ''; ?>" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                    <form method="post" action="index.php">
                        <table class="table table-striped table-dark" style="width:50%;" align="center" border="1">
                            <tr>
                                <td colspan="2" align="center">Instructor Information</td>
                            </tr>
                            <tr>
                                <td>Choose Course</td>
                                <td>
                                    <select name="department" id="Subject">
                                        <option value="101">Artificial Intelligence</option>
                                        <option value="102">Computer Science</option>
                                        <option value="103">Mathematics</option>
                                        <option value="103">Chemistry</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Enter Instructor name</td>
                                <td><input type="text" name="instructor_name" </td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center"><input type="submit" name="submit_ins" value="Show Info"></td>
                            </tr>
                        </table>

                    </form>
                    <?php
                    if (isset($_POST['submit_ins'])) {

                        $department = $_POST['department'];
                        $instructor = $_POST['instructor_name'];

                        include('dbcon.php');
                        include('function.php');

                        showdetailsInstructor($department, $instructor);
                    }

                    ?>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Check your Enrollment today!
                    </button>
                </h5>
            </div>
            <div id="collapseTwo" class="collapse <?php echo isset($_POST['submit']) ? 'show' : ''; ?>" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body">
                    <form method="post" action="index.php">
                        <table class="table table-striped table-dark" style="width:50%;" align="center" border="1">
                            <tbody>
                                <tr>
                                    <td colspan="2" align="center">Student Information</td>
                                </tr>
                                <tr>
                                    <td>Choose Subject</td>
                                    <td>
                                        <select name="std">
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
                                        </select>

                                    </td>
                                </tr>
                                <tr>
                                    <td>Enter StudentId</td>
                                    <td><input type="text" name="StudentId" td="">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" align="center"><input type="submit" name="submit" value="Show Info"></td>
                                </tr>
                            </tbody>
                        </table>

                    </form>
                    <?php
                    if (isset($_POST['submit'])) {

                        $Subject = $_POST['std'];
                        $StudentId = $_POST['StudentId'];

                        include('dbcon.php');
                        include('function.php');

                        showdetails($Subject, $StudentId);
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Explore Courses Offered
                    </button>
                </h5>
            </div>
            <div id="collapseThree" class="collapse <?php echo isset($_POST['submit_course']) ? 'show' : ''; ?>" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                    <form method="post" action="index.php">
                        <table class="table table-striped table-dark" style="width:50%;" align="center" border="1">
                            <tr>
                                <td colspan="2" align="center">Information About Courses</td>
                            </tr>
                            <tr>
                                <td>Choose Course</td>
                                <td>
                                    <select name="department" id="Subject">
                                        <option value="1001">Database Theory</option>
                                        <option value="1003">Software Engineering</option>
                                        <option value="1002">Advance Web Application</option>
                                        <option value="1014" disabled>AdvancedDB</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td colspan="2" align="center"><input type="submit" name="submit_course" value="Show Info"></td>
                            </tr>
                        </table>

                    </form>
                    <?php
                    if (isset($_POST['submit_course'])) {

                        $department = $_POST['department'];

                        include('dbcon.php');
                        include('function.php');

                        showdetailsCourse($department);
                    }
                    ?>
                </div>
            </div>
        </div>
        <!-- <div class="card">
            <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Explore Departments
                    </button>
                </h5>
            </div>
            <div id="collapseThree"  class="collapse <?php echo isset($_POST['submit_dept']) ? 'show' : ''; ?>" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                    <form method="post" action="index.php">
                        <table class="table table-striped table-dark" style="width:50%;" align="center" border="1">
                            <tr>
                                <td colspan="2" align="center">Information About Courses</td>
                            </tr>
                            <tr>
                                <td>Choose department</td>
                                <td>
                                    <select name="department" id="Subject">
                                        <option value="1001">Database Theory</option>
                                        <option value="1003">Software Engineering</option>
                                        <option value="101123" disabled>AdvancedAlgo</option>
                                        <option value="1014" disabled>AdvancedDB</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td colspan="2" align="center"><input type="submit" name="submit_course" value="Show Info"></td>
                            </tr>
                        </table>

                    </form>
                    <?php
                    if (isset($_POST['submit_dept'])) {

                        $department = $_POST['department'];

                        include('dbcon.php');
                        include('function.php');

                        showdetailsCourse($department);
                    }
                    ?>
                </div>
            </div>
        </div> -->
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">About us</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        The University of central Missouri runs with a mission of providing different courses from various feilds. 
        This website is specifically designed for students who want to explore the courses provided by clicking on Get course Information
        , explore about the instructors who offer the courses by clicking on Get Instructor Information,
         and also check if they are Successfully enrolled or not by clicking Check Student enrollment.
         We have also given students accessbility to enroll in a course or drop out of a course using this platform.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Cancel Enrollment</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="index.php" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="studentID">Email address</label>
                            <input type="text" class="form-control" id="studentID" name="studentID" aria-describedby="emailHelp" placeholder="Enter student ID">
                            <small id="emailHelp" class="form-text text-muted">Please enter a correct student ID</small>
                        </div>
                        <div class="form-group">
                            <select name="course" id="Subject">
                                <option value="1001">Database Theory</option>
                                <option value="1003">Software Engineering</option>
                                <option value="1002">Advance Web Application</option>
                                <option value="1014" disabled>AdvancedDB</option>
                            </select>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-danger"><input type="submit" name="cancel_enroll" value="Cancel Enrollment"></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php
    if (isset($_POST['cancel_enroll'])) {
        $course = $_POST['course'];
        $studentID=$_POST['studentID'];
        include('dbcon.php');
        include('function.php');

        deletEnrollment($course,$studentID);
    }
    ?>
    <footer class="page-footer font-small blue" style=" background-color: black;
  color: white;">
        <div class="footer-copyright text-center py-3">
            © 2023 Copyright:
            <a href="https://www.ucmo.edu/college-of-health-science-and-technology/department-of-computer-science-and-cybersecurity/index.php">
                ucmo.edu</a>
        </div>
    </footer>
</body>

</html>