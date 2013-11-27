<?php

App::addJavascript('js.js');

?>

<p><a href="?r=contacts/new">New contact</a></p>

<table class="list blocka">
    <thead>
        <?php foreach ($fields as $fieldId => $field): ?>
            <th><?=$field['name']?></th>
        <?php endforeach ?>
        <th>Control</th>
    </thead>

    <?php foreach ($contacts as $id => $contact): ?>
    <tr>
        <?php foreach ($fields as $fieldId => $field): ?>
        <td>
            <a href="?r=contacts/edit&id=<?=$contact['_id']?>">
                <?php if ((isset($contact[Contact::getFieldKeyName($field)]) && $value = $contact[Contact::getFieldKeyName($field)])
                || (isset($contact[$field['name']]) && $value = $contact[$field['name']]) ): ?>
                    <?php if (is_array($value)): ?>
                        <?= implode(", ", $value) ?>
                    <?php else: ?>
                        <?= $value ?>
                    <?php endif ?>
                <?php endif ?>
            </a>
        </td>
        <?php endforeach ?>
        <td class='delete' data-id="<?=$contact['_id']?>">delete</td>
    </tr>
    <?php endforeach ?>

</table>