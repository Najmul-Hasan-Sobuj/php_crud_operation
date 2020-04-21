<?php   
       $stu_id = $_POST['sid'];
       $stu_name = $_POST['sname'];
       $stu_address = $_POST['saddress'];
       $stu_class = $_POST['sclass'];
       $stu_phone = $_POST['sphone'];

      $conn = mysqli_connect("localhost","root","","crud") or die("connection faild!!");
      $sql = "UPDATE student SET s_name = '$stu_name', s_address = '$stu_address', s_class = '$stu_class', s_phone = '$stu_phone'  WHERE s_id = '$stu_id' ";
      $result = mysqli_query($conn,$sql) or die("unsuccesfull");

      header("location: http://localhost/crud_html/index.php");
      mysqli_close();
      

?>