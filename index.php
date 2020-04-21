<?php
include 'header.php';
?>
<div id="main-content">
    <h1>All Records</h1>
    <?php
$conn = mysqli_connect("localhost", "root", "", "crud") or die("connection faild!!");
$sql = "SELECT * FROM student JOIN student_class where student.s_class = student_class.c_id";
$result = mysqli_query($conn, $sql) or die("unsuccesfull");
if (mysqli_num_rows($result) > 0) {
    ?>
    <table cellpadding="7px">
        <thead>
            <th>Id</th>
            <th>Name</th>
            <th>Address</th>
            <th>Class</th>
            <th>Phone</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php
$i = 1;
    while ($row = mysqli_fetch_assoc($result)) {?>
            <tr>

                <td><?php echo $i++ ?></td>
                <td><?php echo $row['s_name'] ?></td>
                <td><?php echo $row['s_address'] ?></td>
                <td><?php echo $row['c_name'] ?></td>
                <td><?php echo $row['s_phone'] ?></td>
                <td>
                    <a href='edit.php?id= <?=$row['s_id']?>'>Edit</a>
                    <a href='delete-inline.php?id= <?=$row['s_id']?>'>Delete</a>
                </td>
            </tr>
            <?php }?>
        </tbody>
    </table>
    <?php } else {echo "<h2 >No records</h2>";}
mysqli_close($conn);
?>

    <style>
    h2 {
        color: red;
        float: left;
    }
    </style>
</div>
</div>
</body>

</html>