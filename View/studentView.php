<?php
echo "the view has been loaded";
?>

<table>
    <?php foreach ($students as $student): ?>
        <tr>
            <td>
                <?php $student["name"]; ?>
                <a href=""
            </td>
            <td>
                <?php $student["email"]; ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
