<?php
?>

<table>
    <?php foreach ($students as $student): ?>
        <tr>
            <td>
                <a href="index.php?student=<?php echo $student["id"]; ?>"
                   class="text-light"><?php echo $student["name"]; ?></a>
            </td>
            <td>
                <?php echo $student["email"]; ?>
            </td>
        </tr>
    <?php endforeach; ?>

</table>

