<?php

function fs_getFile($file){
    return DATAPATH.$file.".json";
}

function fs_getData($file){
    $file_content = file_get_contents(fs_getFile($file));
    return json_decode($file_content,true);
}

function fs_saveData($arr,$file){
    file_put_contents(fs_getFile($file),json_encode($arr));
}

function fs_appendData($data,$file){
    $arr = fs_getData($file);
    $data["id"] = md5(time());
    $arr[]=$data;
    fs_saveData($arr,$file);
}

function fs_filterData($part,$find_criteria,$file){
    $arr = fs_getData($file);
    $res = [];
    foreach ($arr as $value){
        if (strpos($value[$find_criteria],$part)!==false){
            $res[]=$value;
        }
    }
    return $res;
}

function fs_modifyData($record,$file){
    $arr = fs_getData($file);
    foreach ($arr as &$value){
        if ($value["id"]==$record["id"]) {
            if ($record["name"]!=="")$value["name"]=$record["name"];
            if ($record["number"]!=="")$value["number"]=$record["number"];
        }
    }
    fs_saveData($arr,$file);
}

function fs_delData($id,$file){
    $arr = fs_getData($file);
    $arr=array_filter($arr,function ($e) use ($id){
        return $e["id"]!== $id;
    });
    fs_saveData($arr,$file);
}

