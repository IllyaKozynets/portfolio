<?php

function show_files($a){
    $d=scandir("uploads/");
    foreach ($d as $key=>$mass) {
        if (($mass !== '.') AND ($mass !== '..')) {
            echo "<img height='200px' src='uploads/$mass' title=$a>";

        }

    }
}
function check(){
    $b=null;
    $d=scandir("uploads/");
    $arr=array('image/jpeg','image/png','image/gif');
    if(isset($_POST['submit'])) {
        foreach ($_FILES['file']['tmp_name'] as $key => $value) {
            if((array_search($_FILES['file']['type'][$key],$arr)!==false)&&($_FILES['file']['size'][$key]<=3145728)){
                if(count($d<7)){
                    move_uploaded_file($value,"uploads/".$_FILES['file']['name'][$key]);
                    $b= date('l jS \of F Y h:i:s A');
                }

            }
        }
    }
return $b;
}
$a=check();
include "main.php";