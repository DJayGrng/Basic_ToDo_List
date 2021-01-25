<?php
$rb = new PDO("mysql:dbname=todo;host=localhost", "root");
$result = $rb->query("SELECT ID,Title FROM todo");

$outp = "";
foreach($result as $rs) {
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"ID":"'  . $rs["ID"] . '",';
    $outp .= '"Title":"'   . $rs["Title"]        . '"}';
}
$outp ='{"records":['.$outp.']}';


echo($outp);
?>
