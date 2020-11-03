<table>
    <?php foreach ($teachers as $teacher): ?>
        <tr>
            <td>
                <a href="?page=teachers&teacher=<?php echo $teacher["classes_id"]; ?>"
                   class="text-light"><?php echo $teacher["name"]; ?></a>
            </td>
            <td>
                <?php echo $teacher["email"]; ?>
            </td>
        </tr>

        <td>
            <form method="post">
                <input type="hidden" name="idupdate" value="<?php echo $teacher['id'] ?>"/>
                <input type="submit" name="update" value="Update" class="btn btn-sucess"/>
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
    <h2>Students</h2>
    <table class="table table-striped table-wide text-light">
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
