<?php
?>

<table>
    <?php foreach ($students as $student): ?>
        <tr>
            <td>
                <?php echo $student["name"]; ?>
            </td>
            <td>
                <?php echo $student["email"]; ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
