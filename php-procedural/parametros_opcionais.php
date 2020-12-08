<?php

function convertData($data, $formato = "br") {
    //yyyy-mm-dd
    //2020-10-05
    //05/10/2020
    if ($formato == "br") {
        $data = explode("-", $data);
        $data = array_reverse($data);
        $data = implode("/", $data);
    } else {
        $data = explode("/", $data);
        $data = array_reverse($data);
        $data = implode("-", $data);
    }
    echo $data;
    echo "<hr>";
}

convertData("2020-10-25", "db");