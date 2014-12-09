<html><body>
<?php
echo_my_name();

/**
 * Echos my name
 */

include_once 'student_data.php';

$student = new Student_data();
$student->get_first_name();
$student->get_last_name();

function echo_my_name() {
    $name = 'Yehan';
    echo 'Your name is ' . $name . '.';
}
?>
</body></html>