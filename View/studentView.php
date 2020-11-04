<table>
    <?php foreach ($students as $student): ?>
        <tr>
            <td>
                <a href="?page=students&student=<?php echo $student["id"]; ?>"
                   class="text-light"><?php echo $student["name"]; ?></a>
            </td>
            <td>
                <?php echo $student["email"]; ?>
            </td>
        </tr>

        <td>
            <form method="post">
                <input type="hidden" name="idupdate" value="<?php echo $student['id'] ?>"/>
                <input type="submit" name="update" value="Update" class="btn btn-sucess"/>
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
            <?php echo $studentInfo["id"]?>
            <?php echo $studentInfo["name"]?>
            <?php echo $studentInfo["email"]?>

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
        <label for="name">Name:</label><br>
        <input type="text" name="name" value="name"><br>
        <label for="email">Email:</label><br>
        <input type="text" name="email" value="email"><br>
        <label type="course">Please select the correct class</label>
        <input type="text" name="course" value="course"><br>




        <input type=" submit" name="<?php if (isset($_POST['register'])) {
            echo 'register';
        } ?><?php if (isset($_POST['update'])) {
            echo 'update';
        } ?>" value="<?php if (isset($_POST['register'])) {
            echo 'Register';
        } ?><?php if (isset($_POST['update'])) {
            echo 'Update';
        } ?>">
    </form>
<?php endif; ?>