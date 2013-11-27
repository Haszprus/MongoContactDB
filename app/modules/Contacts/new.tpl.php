<h2>New contact</h2>

<form action="?r=contacts/new" method="post">

    <table class="form list">

        <?php if (count($fields) == 0): ?>
        <tr>
            <td colspan="2">No fields. Please add some fields.</td>
        </tr>
        <?php endif ?>

        <?php foreach ($fields as $id => $field): ?>
            <tr>
                <td><?=$field['name']?></td>
                <?php if ($field['type'] == 'multichoice'): ?>
                    <?php $selectType = $field['selectType'] ? $field['selectType'] : "checkbox"; ?>
                    <td>
                        <ul>
                        <?php foreach ($field['options'] as $option): ?>
                            <li>
                                <input type="<?=$selectType?>"
                                       value="<?php echo $option ?>" name="contacts[<?=Contact::getFieldKeyName($field)?>]<?=$selectType=="checkbox" ? "[]" : ""?>]">
                                <?php echo $option ?>
                            </li>
                        <?php endforeach ?>
                        </ul>
                    </td>
                <?php elseif ($field['type'] == 'bool'): ?>
                    <td><input type="checkbox" name="contacts[<?=$field['name']?>]"></td>
                <?php else: ?>
                    <td><input name="contacts[<?=$field['name']?>]"></td>
                <?php endif ?>
            </tr>
        <?php endforeach ?>
    </table>

    <input type="submit" name="contacts[submit]">

</form>