<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class UploadController extends Controller {
    
     public function LoadImage(){
        
        $teamImage = $_FILES["img"];
        move_uploaded_file($_FILES["img"]["tmp_name"], "C:\\xampp\\htdocs\\DeAnWeb\\img\\" . $_FILES["img"]["name"]);
        return $_FILES["img"]["name"];
     }
}