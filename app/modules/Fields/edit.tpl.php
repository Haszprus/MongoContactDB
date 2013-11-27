<h2>Edit <i>"<?=$doc['name']?>"</i> field</h2>

<form method="post" action="?r=fields/edit">

    <input type="hidden" name="fields[type]" value="<?=$doc['type']?>">
    <input type="hidden" name="fields[_id]" value="<?=$doc['_id']?>">

    <table class="form list">

        <?php if ($doc['type'] == 'multichoice'): ?>

        <tr>
            <td>
                name
            </td>
            <td>
                <input name="fields[name]" value="<?=$doc['name']?>">
            </td>
        </tr>
        <tr>
            <td>select type</td>
            <td>
                <select name="fields[selectType]">
                    <option value="radio">radio</option>
                    <option value="checkbox" <?=isset($doc['selectType']) && $doc['selectType'] == "checkbox" ? "selected" : ""?>>
                        checkbox
                    </option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                options<br>(one per line)
            </td>
            <td>
                <textarea name="fields[options]"
                          rows="<?=count($doc['options']) + 2?>"><?=implode("\n", $doc['options'])?></textarea>
            </td>
        </tr>

        <?php endif ?>

    </table>

    <input type="submit">
</form>