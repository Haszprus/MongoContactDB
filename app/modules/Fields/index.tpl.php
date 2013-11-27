<?php

App::addJavascript('js.js');

include 'new.tpl.php';

?>

<table class="list blocka">
    <thead>
        <th>Field</th>
        <th>Type</th>
        <th>Control</th>
    </thead>

    <?php if (count($fields) == 0): ?>
    <tr>
        <td colspan="3">No fields. Please add some fields.</td>
    </tr>
    <?php endif ?>

    <?php foreach ($fields as $id => $field): ?>
    <tr>
        <td><a href="?r=fields/edit&id=<?=$field['_id']?>"><?=$field['name']?></a></td>
        <td><?=isset($field['type']) ? $field['type'] : ''?></td>
        <td class='delete' data-id="<?=$field['_id']?>">delete</td>
    </tr>
    <?php endforeach ?>

</table>