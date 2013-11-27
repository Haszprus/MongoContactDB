<h2>New field</h2>

<form action="?r=fields/new" method="post">

    <table class="form list">
        <tr>
            <td>Name</td>
            <td><input name="fields[name]"></td>
        </tr>
        <tr>
            <td>Type</td>
            <td>
                <select name="fields[type]">
                    <option>string</option>
                    <option>multichoice</option>
                    <option>bool</option>
                </select>
            </td>
        </tr>
    </table>

    <input type="submit" name="fields[submit]">

</form>