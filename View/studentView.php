<?php
?>

<table>
    <?php foreach ($students as $student): ?>
        <tr>
            <td>

            </td>
            <td>
                <?php echo $student["email"]; ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
