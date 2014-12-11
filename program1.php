<html><body>
<?php

/**
 * Echos my name
 */
function echo_my_name() {
    $name = 'Yehan';
    echo 'Your name is ' . $name . '.';
}
echo_my_name();

include_once 'student_data.php';
include_once 'variables.php';

$student = new Student_data();
$student->get_first_name();
$student->get_last_name();
$student->get_level();


echo $variable1 . $variable2 . '<br />' . '<br />';

mysql_connect('localhost', 'root', 'root');
mysql_select_db('awtweb');
$result = mysql_query('SELECT * FROM `book`');
if (is_resource($result)) {
    while ($row = mysql_fetch_row($result)) {
        var_dump($row);
    }
    mysql_free_result($result);
}

function testGlobal() {
    $variable1 = 'something';
    echo $variable1;
    global $variable1;
    echo $variable1;
}
testGlobal();
?>
</body></html>