<html>
    <body>

<?php
    require_once 'student.php';
    $student = new Student();
?>

        <b>Name:</b> <?php echo $student->get_name() ?> <br />
        <b>ID:</b> <?php echo $student->get_id() ?> <br />
        <b>Course:</b> <?php echo $student->get_course() ?> <br />
        
<?php 
    unset($student)
?>

    </body>
</html>