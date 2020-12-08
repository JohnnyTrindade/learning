<?php

//function digaOi($nome) {
//
//    echo "Oi, " . $nome;
//    echo "<hr>";
//}
//
//digaOi("fulano");
//digaOi("cicrano");
//digaOi("beltrano");
//

//function convertData($formato, $data) {
//    //yyyy-mm-dd
//    //2020-10-05
//    //05/10/2020
//    if ($formato == "br") {
//        $data = explode("-", $data);
//        $data = array_reverse($data);
//        $data = implode("/", $data);
//    } else {
//        $data = explode("/", $data);
//        $data = array_reverse($data);
//        $data = implode("-", $data);
//    }
//    echo $data;
//    echo "<hr>";
//}

convertData("br","2020-10-05");
convertData("db","05/10/2020");
