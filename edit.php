<?php include 'header.php'; ?>

<div id="main-content">
    <h2>Update Record</h2>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "crud") or die("connection faild!!");

    $stu_id = $_GET['id'];

    $sql = "SELECT * FROM student  where s_id = '$stu_id' ";
    $result = mysqli_query($conn, $sql) or die("unsuccesfull");
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {

    ?>
    <form class="post-form" action="updatedata.php" method="post">

        <div class="form-group">
            <label>Name</label>
            <input type="hidden" name="sid" value="<?php echo $row['s_id'] ?>" />
            <input type="text" kl_virtual_keyboard_secure_input="on" name="sname"
                value="<?php echo $row['s_name'] ?>" />
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="saddress" value="<?php echo $row['s_address'] ?>" />
        </div>
        <div class="form-group">
            <label>Class</label>
            <?php
                    $sql1 = "SELECT * FROM student_class";
                    $result1 = mysqli_query($conn, $sql1) or die("unsuccesfull");
                    if (mysqli_num_rows($result1) > 0) {
                        echo '<select name="sclass">
                    <option value="" selected disabled>Select Class</option>';
                        while ($row1 = mysqli_fetch_assoc($result1)) {
                    ?>
            <option value="<?php echo $row1['c_id'] ?>" <?php if ($row1['c_id'] == $row['s_class']) {
                                                                            echo "selected";
                                                                        } else {
                                                                            echo '';
                                                                        } ?>><?php echo $row1['c_name'] ?></option>

            <?php } ?>
            </select>
            <?php } ?>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="sphone" value="<?php echo $row['s_phone'] ?>" />
        </div>
        <input class="submit" type="submit" value="Update">
    </form>
    <?php }
    }
    ?>
</div>
</div>
</body>

</html>