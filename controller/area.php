<?php
    require_once("../config/conexion.php");
    require_once("../models/Area.php");
    $area = new Area();

    switch($_GET["op"]){

        case "guardaryeditar":
            $datos= $area->get_area_x_nom($_POST["area_nom"]);
            if(count($datos)==0){
                if(empty($_POST["area_id"])){
                    $area->insert_area($_POST["area_nom"]);  
                    echo "1";
                }
                else {
                    $prioridad->update_area($_POST["area_id"],$_POST["area_nom"]);
                    echo "2";
                }
            }else{
                echo "0";
            }
        break;

        case "listar" :
            $datos=$area->get_area();
            $data= Array();
            foreach($datos as $row){
                $sub_array = array();
                $sub_array[] = $row["area_nom"];
                $sub_array[] = '<button type="button" onClick="editar('.$row["area_id"].');"  id="'.$row["area_id"].'" class="btn btn-inline btn-warning btn-sm ladda-button"><i class="fa fa-edit"></i></button>';
                $sub_array[] = '<button type="button" onClick="eliminar('.$row["area_id"].');"  id="'.$row["area_id"].'" class="btn btn-inline btn-danger btn-sm ladda-button"><i class="fa fa-trash"></i></button>';
                $data[] = $sub_array;
            }

            $results = array(
                "sEcho"=>1,
                "iTotalRecords"=>count($data),
                "aaData"=>$data);
            echo json_encode($results);
        break;

        case "eliminar":
            $area->delete_area($_POST["area_id"]);
        break;

        case "mostrar";
            $datos=$area->get_area_x_id($_POST["area_id"]);
            if(is_array($datos)==true and count($datos)>0){
                foreach($datos as $row)
                {
                    $output["area_id"] = $row["area_id"];
                    $output["area_nom"] = $row["area_nom"];
                }
                echo json_encode($output);
            }
        break;


        case "combo":
            $datos = $area->get_area();
            if(is_array($datos)==true and count($datos)>0){
                $html.="<option value=''>Seleccionar</option>";
                foreach($datos as $row)
                {
                    $html.= "<option value='".$row['area_id']."'>".$row['area_nom']."</option>";
                }
                echo $html;
            }
        break;
    }
?>