<?php

include FNPATH."view_fns.php";

function action_404(){
    $data = ["title"=>"404",
        "text"=>"Sorry, this page is not found"];
    return renderViewWithTemplate("404","default",$data);
}