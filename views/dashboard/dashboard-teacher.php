<?php
    include_once('../config.php');
    include_once(CON_FRONT . 'ScheduleController.php');
    $schedule = teacher_index();
    $courses = teacher_courses();
    // echo $_SESSION['uni_id'];
    // echo $_SESSION['user_type'];
    // var_dump($schedule);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule</title>
    <link rel="shortcut icon" href="../../../resources/image/2222.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <!-- links -->
    <?php include_once('../layout/links.php'); ?>
    <!-- end of links -->
</head>

<body>
    <!-- navBar -->
    <?php include_once('../layout/navBar/navBar.php'); ?>
    <!-- end of navBar -->
    <!-- <div class="card" style="">
        <div class="card-body">
            <a href="#" class="btn btn-primary btn-block">See Profile</a>
            <button type="button" class="btn btn-primary btn-block">Full-Width Button</button>
            <h4 class="card-title">Jane Doe</h4>
            <p class="card-text">Some example text some example text. Jane Doe is an architect and engineer</p>
        </div>
    </div> -->

    <div class="container-fluid mt-3">
        <h1 style="text-align: center;background-color:#e6ac00;padding-top:10px;padding-bottom:15px">Class Schedule</h1>
        <table class="table table-hover table-dark table-striped table-bordered">

            <tbody>
                <?php for($n = 0; $n < 8; $n++)
                { 
                    $date = date("d-M-Y",strtotime(' +'.$n.' day'));
                    $date2 = date("Y/m/d",strtotime(' +'.$n.' day'));
                    $timestamp = strtotime($date2);?>
                <tr>
                    <td><?=  $date. " - " . date("l", $timestamp)?></td>
                    <td style="text-align:left;">
                        <?php 
                        $i = 0;
                        foreach($schedule as $s)
                        {
                            
                            if(strtolower(date("l", $timestamp)) == strtolower($s->day)){ 
                                if($i != 0 )
                                {
                                echo " | ";   
                                }
                            ?>
                        <?= $s->course_code ?>-
                        <?= $s->course_title ?>
                        <?php 
                            $time = strtotime($s->start_time); 
                            echo "<span style='color:red'>[".date('H:i',$time);
                            echo " - ";
                            $time = strtotime($s->end_time); 
                            echo date('H:i',$time) ."] </span><span style='color:cyan'>[RN-05]</span>";
                            ?>
                        <?php $i++; }
                            
                        }
                    ?>

                        <?php 
                    if($i == 0 )
                    { ?>
                        <span class="text-warning">No Class on this Day</span>
                        <?php }
                    ?>
                    </td>
                </tr>
                <?php } ?>

            </tbody>
        </table>
        <button type="button" class="btn btn-danger" style="width:10%;margin-left:90%;padding:10px;border-radius:10px"><a href="../Cancel/cancel.php">Cancel Class</a></button>
        <h1 style="text-align: center;background-color:#00ffff;padding-top:10px;padding-bottom:15px">Courses</h1>
        
        <div class="row">
            <?php 
            foreach($courses as $cr)
            { ?>
                <div class="col col-md-4 col sm-12 col-lg-4">
                <div class="card" style="width:400px">
                    <div class="card-body">
                        <h4 class="card-title"><?= $cr->course_code ?></h4>
                        <h4 class="card-title"><?= $cr->course_title ?></h4>
                        <a href="#" class="btn btn-primary">Details</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        


        <a href="href=../../../dashboard/admin.php" class="btn btn-primary" style="margin-left:95.5%">Back</a>
    </div>
    <footer style="text-align:center;margin-top:5%;margin-bottom:5%;">© Created By Nyem & Sakib @2022</footer>
    
</body>

</html>
<!-- create view student_routine as SELECT es.*, r.*, s.name,s.admission_semester,s.sem_id,s.student_id FROM routine_details r, students s, enroll_course_students es WHERE es.enroll_course_teacher_id = r.id and es.student_id = s.id; -->