<?php

?>

<table>
    <?php foreach ($courses as $course):?>
    <tr>
        <td>
            <a href="index.php?classes=<?php echo $course["id"]; ?>"
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
