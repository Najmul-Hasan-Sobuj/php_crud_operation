<?php
    $stu_id = $_GET['id'];
    $conn = mysqli_connect("localhost", "root", "", "crud") or die("connection faild!!");
    $sql = "DELETE FROM student WHERE s_id = '$stu_id'";
    $result = mysqli_query($conn, $sql) or die("unsuccesfull");

    header("location: http://localhost/crud_html/index.php ");

    mysqli_close($conn);



?>