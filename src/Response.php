<?php
/**
 * Created by PhpStorm.
 * User: Ananda Erditya
 * Date: 18/10/2020
 * Time: 18:22
 */

namespace anandaerditya\Closure\Response;


class Response
{
    public static function message($brand, $message_type, $content){
        switch ($message_type){
            case 'error':
                // Generate Response
                $response = ['brand' => $brand, 'status' => 500, 'state' => 'Error', 'message' => $content]; 
                return response()->json($response); 
            break;
            case 'success':
                // Generate Response
                $response = ['brand' => $brand, 'status' => 200, 'state' => 'OK', 'message' => $content]; 
                return response()->json($response); 
            break;
            default:
                // Generate Response
                $response = ['brand' => $brand, 'status' => 'unknown', 'state' => 'unknown', 'message' => $content]; 
                return response()->json($response); 
            break;
        }
    }

    public static function fetch($brand, $data){
        // Send the response
        $response = ['brand' => $brand, 'status' => 200, 'message' => 'OK', 'result' => $data]];
        return response()->json($response);
    }
}
