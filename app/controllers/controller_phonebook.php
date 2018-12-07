<?php

include FNPATH."phone_book_fns.php";

function action_add(){
    $data["name"]=$_POST["name"];
    $data["number"]=$_POST["number"];
    fs_appendData($data,"phonebook_data");
    header("Location:/phonebook");
    return "";
}

function action_changes(){
    $record=[];
    $record["id"] = $_POST["id"];
    $record["name"] = $_POST["ch_name"];
    $record["number"] = $_POST["ch_number"];
    fs_modifyData($record,"phonebook_data");
    header("Location:/phonebook");
    return "";
}

function action_del(){
    $id = $_GET["id"];
    fs_delData($id,"phonebook_data");
    header("Location:/phonebook");
    return "";
}