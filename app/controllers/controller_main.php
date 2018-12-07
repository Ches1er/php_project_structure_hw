<?php

include FNPATH."view_fns.php";
include FNPATH."phone_book_fns.php";

function action_index(){
    $data = ["title"=>"Главная"];
    return renderViewWithTemplate("main","default",$data);
}

function action_show(){
    $name_part=$_GET["name"];
    $num_part=$_GET["number"];
    if ($name_part)$filter_data=fs_filterData($name_part,"name","phonebook_data");
    else if ($num_part)$filter_data= fs_filterData($num_part,"number","phonebook_data");
    $data = ["title"=>"Телефонная книга",
        "filter_data"=>$filter_data
        ];
    return renderViewWithTemplate("phonebook","default",$data);
}

function action_changes(){
    $data = ["title"=>"Изменение записей"];
    return renderViewWithTemplate("changes","default",$data);
}