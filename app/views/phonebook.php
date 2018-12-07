
<h1>Phonebook</h1>
<div class="tables">
    <table>
        <caption>All records</caption>
        <tr>
            <th>Name</th>
            <th>PhoneNumber</th>
        </tr>
        <?php
        $phone_numbers = fs_getData("phonebook_data");
        foreach ($phone_numbers as $value):?>
            <tr>
                <td><?=$value["name"]?></td>
                <td><?=$value["number"]?></td>
            </tr>
        <? endforeach;?>
    </table>

    <table>
        <caption>Records by filter</caption>
        <tr>
            <th>Name</th>
            <th>PhoneNumber</th>
        </tr>
        <?php
        if (is_array($filter_data)):
        foreach ($filter_data as $value):?>
            <tr>
                <td><?=$value["name"]?></td>
                <td><?=$value["number"]?></td>
            </tr>
        <? endforeach;
        endif;
        ?>
    </table>

</div>

<div class="data_action">

    <form action="/add" method="post">
        <h4>Add data</h4>
        <dl>
            <dt>name:</dt>
            <dd><input type="text" name="name"></dd>
            <dt>phonenumber:</dt>
            <dd><input type="text" name="number"></dd>
        </dl>
        <input type="submit" value="Add record">
    </form>

    <form action="/filter" method="get">
        <h4>Filter data</h4>
        <dl>
            <dt>name:</dt>
            <dd><input type="text" name="name"></dd>
            <dt>phonenumber:</dt>
            <dd><input type="text" name="number"></dd>
        </dl>
        <input type="submit" value="Use filter">
    </form>

</div>





