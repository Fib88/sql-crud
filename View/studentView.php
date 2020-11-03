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
            <td>
                <form>
                    <input type="submit" name="edit" value=<?php $student["id"]?>>
                </form>
            </td>

            <td>
                <form>
                    <input type="submit" name="delete" value=<?php $student["id"]?>>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>

</table>

