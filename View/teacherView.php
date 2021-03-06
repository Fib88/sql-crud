<?php require 'includes/header.php' ?>
<table>
    <?php foreach ($teachers as $teacher): ?>
        <tr>
            <td>

                <a href="?page=teachers&teacher=<?php echo $teacher["classes_id"]; ?>"
                ><?php echo $teacher["name"]; ?></a>
            </td>
            <td>
                <?php echo $teacher["email"]; ?>
            </td>
        </tr>

        <td>
            <form method="post">
                <input type="hidden" name="idupdate" value="<?php echo $teacher['id'] ?>"/>
                <input type="submit" name="update" value="Update" class="btn btn-primary"/>
            </form>
        </td>
        <td>
            <form method="post">
                <input type="hidden" name="id" value="<?php echo $teacher['id'] ?>"/>
                <input type="submit" name="delete" value="Delete" class="btn btn-danger">
            </form>
        </td>

    <?php endforeach; ?>

</table>

<?php if (isset($_GET['teacher'])): ?>
    <h2>Class : </h2>
    <p> <?php echo $classname ?></p>
    <h2>Students</h2>
    <table class="table table-striped table-wide">
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($students as $student): ?>
            <tr>
                <td><?php echo $student['name'] ?></td>
                <td><?php echo $student['email'] ?></td>
            </tr>
        <?php endforeach; ?>

        </tbody>


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
        <input type="hidden" name="id" value="<?php echo $updatedTeacher['id'] ?>"/>
        <label for="name">Name:</label><br>
        <input type="text" name="name" value="<?php echo $updatedTeacher['name']; ?>"><br>
        <label for="email">Email:</label><br>
        <input type="text" name="email" value="<?php echo $updatedTeacher['email']; ?>"><br>

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
