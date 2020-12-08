<?php

//$row = 1;
//if (($handle = fopen("test-01.csv", "r")) !== FALSE) {
//    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
//        $num = count($data);
//        echo "<p> $num fields in line $row: <br /></p>\n";
//        $row++;
//        for ($c=0; $c < $num; $c++) {
//            echo $data[$c] . "<br />\n";
//        }
//    }
//    fclose($handle);
//}

//$file = fopen("test-01.csv","r");
//while(!feof($file))
//{
//    print_r(fgetcsv($file));
//}
//fclose($file);

$sku = 0;
$gid = 1;

$file = fopen("test-01.csv","r");
while( ($row = fgetcsv($file)) !== FALSE){
    if (isset($row[$sku])) {
        print_r ($row[$sku]);
        echo " ";
        print_r ($row[$gid]);
        echo "<br>";
    }
}
fclose($file);