<?php

?>

<table>
    <?php foreach ($classes as $course):?>
    <tr>
        <td>
            <a href="index.php?classes=<?php ; ?>"
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
