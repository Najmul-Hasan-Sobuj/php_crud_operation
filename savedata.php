<?php

        $stu_name = $_POST['sname'];
        $stu_address = $_POST['saddress'];
        $stu_class = $_POST['class'];
        $stu_phone = $_POST['sphone'];

       $conn = mysqli_connect("localhost","root","","crud") or die("connection faild!!");
       $sql = "INSERT INTO student(s_name, s_address, s_class, s_phone) VALUES ('$stu_name','$stu_address','$stu_class','$stu_phone')";
       $result = mysqli_query($conn,$sql) or die("unsuccesfull");

       header("location: http://localhost/crud_html/add.php");
       mysqli_close();




?>