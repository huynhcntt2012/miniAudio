<?php namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\Json;
abstract class Controller extends BaseController {

	use DispatchesCommands, ValidatesRequests;
    
    public function resultObject($data,$success,$message){
        
        $array = array();
    
        $api = new Json();
            
        $array = array(
            $api->statusCode => "statusCode",
            $api->success => $success,
            $api->data => $data,
            $api->message => $message
        );
        
        echo json_encode($array);
    }
    
    
    public function resultApi($data,$success,$message){
        
        $array = array();
        
        $findObject = array();
    
        foreach($data as $i => $itemdata){
            
            $filler = $itemdata->getAttributes();
            
            foreach(array_keys($filler) as $j => $item){
                
                $array[$item] = $itemdata[$item];
            }
            
            $findObject[$i] = $array;
        }
    
        $api = new Json();
            
        $array = array(
            $api->statusCode => "statusCode",
            $api->success => $success,
            $api->data => $findObject,
            $api->message => $message
        );
        
        echo json_encode($array);
    }
    
    public function resultJson($data, $success, $message) {
        
        
        $api = new Json();
            
        $array = array(
            $api->statusCode => "statusCode",
            $api->success => $success,
            $api->data => $data,
            $api->message => $message
        );
        
        echo json_encode($array);
    }
    
    
    public function resultArray($data, $success, $message) {
        
        
        $api = new Json();
            
        $array = array(
            $api->statusCode => "statusCode",
            $api->success => $success,
            $api->data => array($data),
            $api->message => $message
        );
        
        echo json_encode($array);
    }

}
