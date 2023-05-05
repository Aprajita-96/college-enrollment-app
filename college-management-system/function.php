<?php


function showdetails($Subject, $StudentId)
{
    include('dbcon.php');

    $qry = "SELECT * FROM `student_ui` WHERE `StudentId`='$StudentId' AND `Subject`='$Subject'";

    $run = mysqli_query($con, $qry);

    if (mysqli_num_rows($run) > 0) {
        $data = mysqli_fetch_assoc($run);
?>
   <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Student Details</h5>
                            <p class="card-text">Student ID: <?php echo $data['course_id'] ?> </p>
                            <p class="card-text">Student Name: <?php echo $data['name'] ?> </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <!-- <div class="card">
                        <div class="card-body"> -->
                            <img style="height:217px" src="dataimg/<?php echo $data['image']; ?>"/>
<!-- 
                        </div>
                    </div> -->
                </div>
            </div>



        <?php




    } else {
        echo "<script>alert('No Student Found'); </script>";
    }
}

function showdetailsInstructor($department, $instructor)
{
    include('dbcon.php');

    $qry = "SELECT * FROM `instructor`
    INNER JOIN department ON instructor.department_id = department.dept_id WHERE `department_id`='$department' AND `instructor_name`='$instructor'";

    $run = mysqli_query($con, $qry);

    if (mysqli_num_rows($run) > 0) {
        $data = mysqli_fetch_assoc($run);
        ?>
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Instructor Details</h5>
                            <p class="card-text">ID: <?php echo $data['instructor_id'] ?> </p>
                            <p class="card-text">Name: <?php echo $data['instructor_name'] ?> </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Department Details</h5>
                            <p class="card-text">ID: <?php echo $data['department_id'] ?> </p>
                            <p class="card-text">Name: <?php echo $data['dept_name'] ?> </p>
                        </div>
                    </div>
                </div>
            </div>
        <?php

    } else {
        echo "<script>alert('No Student Found'); </script>";
    }
}
function showdetailsCourse($course_id)
{
    include('dbcon.php');

    $qry = "SELECT * FROM `course`
    INNER JOIN department ON course.dept_id = department.dept_id
    INNER JOIN instructor ON course.dept_id = instructor.department_id
     WHERE `course_id`='$course_id' ";

    $run = mysqli_query($con, $qry);

    if (mysqli_num_rows($run) > 0) {
        $data = mysqli_fetch_assoc($run);
        ?>
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Course Details</h5>
                            <p class="card-text">ID: <?php echo $data['course_id'] ?> </p>
                            <p class="card-text">Course Name: <?php echo $data['course_name'] ?> </p>
                            <p class="card-text">Instructor Name: <?php echo $data['instructor_name'] ?> </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Department Details</h5>
                            <p class="card-text">ID: <?php echo $data['dept_id'] ?> </p>
                            <p class="card-text">Name: <?php echo $data['dept_name'] ?> </p>
                        </div>
                    </div>
                </div>
            </div>


        <?php




    } else {
        echo "<script>alert('No Student Found'); </script>";
    }
}
function deletEnrollment($course,$studentID){
    include('dbcon.php');

    $qry="DELETE FROM enrollment
    WHERE `course_id` = '$course' AND `student_id`= '$studentID'";
   
    $run = mysqli_query($con,$qry);
    
    if($run == true){
        ?>
        <script>
            alert('Data Deleted Successfully');
            window.open('index.php','self');
        </script>
        <?php
    }
}

        ?>


