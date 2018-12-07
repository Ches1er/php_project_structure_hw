<h1>Modify Records</h1>

<div class="tables">
    <table>
        <caption>All records</caption>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>PhoneNumber</th>
        </tr>
        <?php
        $phone_numbers = fs_getData("phonebook_data");
        foreach ($phone_numbers as $value):?>
            <tr>
                <td><?=$value["id"]?></td>
                <td><?=$value["name"]?></td>
                <td><?=$value["number"]?></td>
                <td class="del"><a href=<?="/del?id=".$value["id"]?>>X</a></td>
            </tr>
        <? endforeach;?>
    </table>
</div>

<div class="data_action">

    <form action="/changes" method="post">
        <p>Here is you can modify</p>
        <p>name or phone number by user ID</p>
        <dl>
            <dt>Id:</dt>
            <dd><input type="text" name="id"></dd>
            <dt>name:</dt>
            <dd><input type="text" name="ch_name"></dd>
            <dt>phonenumber:</dt>
            <dd><input type="text" name="ch_number"></dd>
        </dl>
        <input type="submit" value="Apply changes">
    </form>

</div>





