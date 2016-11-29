<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class InforAccountController extends Controller {
    
    public function WriteAccount(Request $request){
        return "Hello World";
    }
}