<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Sub;



class SubController extends Controller {
    
    public function CreateSub(Request $request){
        
        if ($request->input(Sub::SUB_NAME) == "") {
            
            return $this->resultApi(array(),"false","deficient parameter user ".Sub::SUB_NAME);
            
        }
        
        if ($request->input(Sub::SUB_CATE) == "") {
            
            $idCate = '';
        }
        else{
            $idCate = $request->input(Sub::SUB_CATE);
        }
        
        $nameSub = $request->input(Sub::SUB_NAME);
        
        
        DB::table(Sub::TABLE_SUB)->insert(array(Sub::SUB_NAME => $nameSub, Sub::SUB_CATE => $idCate));
        
        $list = DB::table(Sub::TABLE_SUB)->select()
									->get();
        
        return json_encode($list);
    }
    
    
    public function EditSub(Request $request){
        
        if ($request->input(Sub::SUB_ID) == "") {
            
            return $this->resultApi(array(),"false","deficient parameter user ".Sub::SUB_ID);
            
        }
        
        if ($request->input(Sub::SUB_NAME) == "") {
            
            return $this->resultApi(array(),"false","deficient parameter user ".Sub::SUB_NAME);
            
        }
        
        if ($request->input(Sub::SUB_CATE) == "") {
            
            $idCate = '';
        }
        else{
            $idCate = $request->input(Sub::SUB_CATE);
        }
        
        $idSub = $request->input(Sub::SUB_ID);
        $nameSub = $request->input(Sub::SUB_NAME);
        
        
        DB::table(Sub::TABLE_SUB)->where(Sub::SUB_ID,"=",$idSub)->update(array(Sub::SUB_NAME => $nameSub,Sub::SUB_CATE => $idCate));
        
        $list = DB::table(Sub::TABLE_SUB)->select()
									->get();
        
        return json_encode($list);
    }
    
    public function DeleteSub(Request $request){
        
        if ($request->input(Sub::SUB_ID) == "") {
            
            return $this->resultApi(array(),"false","deficient parameter user ".Sub::SUB_ID);
            
        }
        
        $idSub = $request->input(Sub::SUB_ID);
        
        
        DB::table(Sub::TABLE_SUB)->where(Sub::SUB_ID,"=",$idSub)->delete();
        
        $list = DB::table(Sub::TABLE_SUB)->select()
									->get();
        
        return json_encode($list);
    }
    
    public function LoadSub(){
        
        $list = DB::table(Sub::TABLE_SUB)->select()
									->get();
        
        return json_encode($list);
    }
    
    
}