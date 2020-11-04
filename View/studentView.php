<table>
    <?php foreach ($students as $student): ?>
        <tr>
            <td>
                <a href="?page=students&student=<?php echo $student["id"]; ?>"
                   class="text-dark"><?php echo $student["name"]; ?></a>
            </td>
            <td>
                <?php echo $student["email"]; ?>
            </td>
        </tr>

        <td>
            <form method="post">
                <input type="hidden" name="idupdate" value="<?php echo $student['id'] ?>"/>
                <input type="submit" name="update" value="Update" class="btn btn-primary"/>
            </form>
        </td>
        <td>
            <form method="post">
                <input type="hidden" name="id" value="<?php echo $student['id'] ?>"/>
                <input type="submit" name="delete" value="Delete" class="btn btn-danger">
            </form>
        </td>

    <?php endforeach; ?>

</table>

<?php if (isset($_GET['student'])): ?>
    <table>
        <tr>
            <h4>Student Details</h4>
            <p>Student id:<br>
                <?php echo $studentInfo[0]["id"] ?>
            </p>
            <p>Name:<br>
                <?php echo $studentInfo[0]["name"] ?>
            </p>
            <p>Email adress:<br>
                <?php echo $studentInfo[0]["email"] ?>
            </p>
            <p>Course:<br>
                <?php echo $studentsClass ?>
            </p>
            <p>Teacher:<br>
                <?php echo $teacherFromCourse ?>
            </p>


        </tr>
    </table>

<?php endif; ?>

<td>
    <form method="post">
        <input type="submit" name="register" value="Register" class="btn btn-success">
    </form>
</td>

<?php if (isset($_POST['register']) || isset($_POST['update'])): ?>


    <h2><?php if (isset($_POST['register'])) {
            echo 'Register :';
        } ?><?php if (isset($_POST['update'])) {
            echo 'Update :';
        } ?> </h2>
    <form method="post">
        <input type="hidden" name="id" value="<?php echo $updatedStudent['id'] ?>"/>
        <label for="name">Name:</label><br>
        <input type="text" name="name" value="<?php echo $updatedStudent['name']; ?>"><br>
        <label for="email">Email:</label><br>
        <input type="text" name="email" value="<?php echo $updatedStudent['email']; ?>"><br>
        <select name="course" class="custom-select">
            <option selected>Please select the correct class</option>
            <?php foreach ($classes as $course): ?>
                <option value="<?php echo $course["id"]; ?>"><?php echo $course["name"]; ?></option>
            <?php endforeach; ?>
        </select>

        <input type="submit" name="add" value="<?php if (isset($_POST['register'])) {
            echo 'Register';
        } ?><?php if (isset($_POST['update'])) {
            echo 'Update';
        } ?>" class="btn btn-success">


    </form>
<?php endif; ?>