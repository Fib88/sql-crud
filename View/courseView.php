<?php

?>

<table>
    <?php foreach ($classes as $course):?>
    <tr>
        <td>
            <a href="?page=classes&course=<?php echo $course["id"]; ?>
               class="text-light"><?php echo $course["name"]; ?></a>
        </td>
        <td>
            <?php echo $course["location"]; ?>
        </td>
    </tr>
    <?php endforeach; ?>
        </td>
    </tr>
</table>

<?php if (isset($_GET['course'])): ?>
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