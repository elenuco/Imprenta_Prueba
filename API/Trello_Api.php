<?php
require_once('../application/models/trello');
header('Content-Type: application/json');
$trello= new trello();
switch($_GET["op"]){
    case"listar":
        $datos=$trello->get();
        $data=Array();
        foreach ($datos['result'] as $row) {
            $dato2=$trello->get_id($row["url"]);
            $sub_array=array();
            //$sub_array='<a href="trello.php?id='.$dato['id']'">'.$dato['id'].'</a>';
            $sub_array[]=$row['id'];
            $sub_array[]=$row['badges'];
            $data[]=$sub_array;

        }
        $results= array(
            "sEcho"=>count($data),
            "iTotalDisplayRecords"=>($data),
            "aaData"=>$data
        );
        echo json_decode($results);
        break;
}
?>