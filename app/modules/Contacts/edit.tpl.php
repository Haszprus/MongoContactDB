<h2>Edit contact</h2>

<form action="?r=contacts/edit" method="post">

    <input type="hidden" name="contacts[_id]" value="<?=$doc['_id']?>">

    <table class="form list">

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
                                           value="<?php echo $option ?>"
                                           name="contacts[<?=Contact::getFieldKeyName($field)?>]<?=$selectType == "checkbox" ? "[]" : ""?>]"
                                        <?php if (isset($doc[(Contact::getFieldKeyName($field))]) && ($doc[(Contact::getFieldKeyName($field))] == $option || is_array($doc[(Contact::getFieldKeyName($field))]) && in_array($option, $doc[(Contact::getFieldKeyName($field))]))): ?> checked <?php endif ?>>
                                    <?php echo $option ?>
                                </li>
                            <?php endforeach ?>
                        </ul>
                    </td>
                <?php elseif ($field['type'] == 'bool'): ?>
                    <td><input type="checkbox"
                               name="contacts[<?=$field['name']?>]" <?=isset($doc[$field['name']]) ? "checked" : ""?>></td>
                <?php else: ?>
                    <td><input name="contacts[<?=$field['name']?>]" value="<?=$doc[$field['name']]?>"></td>
                <?php endif ?>
            </tr>
        <?php endforeach ?>
    </table>

    <input type="submit" name="contacts[submit]">

</form>