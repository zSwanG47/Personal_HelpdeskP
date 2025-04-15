<?php

/* llamada de las clases necesarias que se usaran en el envio del mail */
require_once("../config/conexion.php");
require_once("../Models/Ticket.php");

class Whatsapp extends Conectar{

    public function w_ticket_abierto($tick_id){
        $ticket = new Ticket();
        $datos = $ticket->listar_ticket_x_id($tick_id);
        foreach ($datos as $row){
            $id = $row["tick_id"];
            $titulo = $row["tick_titulo"];
            $telefono = $row["usu_telf"];
        }

        $apiURL = 'https://api.chat-api.com/instance406742/';
        $token = 'b4kgecozys8jhie3';


        $data = json_encode(
            array(
                'chatId'=>"".$telefono."@c.us",
                'body'=>"Ticket Abierto ".$id." : ".$titulo.""
            )
        );

        $url = $apiURL.'message?token='.$token;
        $options = stream_context_create(
            array('http' =>
                array(
                    'method'  => 'POST',
                    'header'  => 'Content-type: application/json',
                    'content' => $data
                )
            )
        );
        $response = file_get_contents($url,false,$options);
    }

    public function w_ticket_cerrado($tick_id){
        $ticket = new Ticket();
        $datos = $ticket->listar_ticket_x_id($tick_id);
        foreach ($datos as $row){
            $id = $row["tick_id"];
            $titulo = $row["tick_titulo"];
            $telefono = $row["usu_telf"];
        }

        $apiURL = 'https://api.chat-api.com/instance406742/';
        $token = 'b4kgecozys8jhie3';


        $data = json_encode(
            array(
                'chatId'=>"".$telefono."@c.us",
                'body'=>"Ticket Cerrado ".$id." : ".$titulo.""
            )
        );

        $url = $apiURL.'message?token='.$token;
        $options = stream_context_create(
            array('http' =>
                array(
                    'method'  => 'POST',
                    'header'  => 'Content-type: application/json',
                    'content' => $data
                )
            )
        );
        $response = file_get_contents($url,false,$options);
    }

    public function w_ticket_asignado($tick_id){
        $ticket = new Ticket();
        $datos = $ticket->listar_ticket_x_id($tick_id);
        foreach ($datos as $row){
            $id = $row["tick_id"];
            $titulo = $row["tick_titulo"];
            $categoria = $row["cat_nom"];
            $subcategoria = $row["cats_nom"];
            $telefono = $row["usu_telf"];
        }

        $apiURL = 'https://api.chat-api.com/instance406742/';
        $token = 'b4kgecozys8jhie3';


        $data = json_encode(
            array(
                'chatId'=>"".$telefono."@c.us",
                'body'=>"Ticket Asignado ".$id." : ".$titulo."Categoria : ".$categoria."SubCategoria : ".$subcategoria.""
            )
        );
        
        $url = $apiURL.'message?token='.$token;
        $options = stream_context_create(
            array('http' =>
                array(
                    'method'  => 'POST',
                    'header'  => 'Content-type: application/json',
                    'content' => $data
                )
            )
        );
        $response = file_get_contents($url,false,$options);
    }

}
?>