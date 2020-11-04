<?php

?>
<h2>Classes</h2>

    <?php foreach ($classes as $course):?>
    <table class="table table-striped table-wide text-dark">
    <tr>
        <td>
            <a href="?page=classes&course=<?php echo $course["id"]; ?>"class="text-dark"><?php echo $course["name"]; ?></a>

            <?php echo " in ". " ".$course["location"]; ?>

            <form method="post">
                <input type="hidden" name="idupdate" value="<?php echo $course['id'] ?>"/>
                <input type="submit" name="update" value="Update" class="btn btn-primary"/>

                <input type="hidden" name="id" value="<?php echo $course['id'] ?>"/>
                <input type="submit" name="delete" value="Delete" class="btn btn-danger">
            </form>
        </td>
    </tr>


</table>
<?php endforeach; ?>

<?php if (isset($_POST['register']) || isset($_POST['update'])): ?>

    <form method="post">
        <input type="hidden" name="id" value="<?php echo $updatedClass['id'] ?>"/>
        <label for="name">Class Name:</label><br>
        <input type="text" name="name" value="<?php echo $updatedClass['name']; ?>"><br>
        <label for="email">Location:</label><br>
        <input type="text" name="location" value="<?php echo $updatedClass['location']; ?>"><br>

        <select name="course" class="custom-select">
            <option selected>Please select the correct class</option>
            <?php foreach ($classes as $course): ?>
                <option  value="<?php echo $course["id"]; ?>"><?php echo $course["name"]; ?></option>
            <?php endforeach; ?>
        </select>


        <input type="submit" name="add" value="<?php if (isset($_POST['register'])) {
            echo 'Register';
        } ?><?php if (isset($_POST['update'])) {
            echo 'Update';
        } ?>" class="btn btn-success">

    </form>
<?php endif;?>



<?php if (isset($_GET['course'])): ?>
    <h1>Teacher</h1>
    <table class="table table-striped table-wide text-dark">
        <a href="?page=teachers"
        ><?php echo $teacherShow["name"]; ?></a>
    </table>


    <h2>Students</h2>
    <table class="table table-striped table-wide text-dark">
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
<?php endif;
