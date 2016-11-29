<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Sub;
use App\Models\Time;
use App\Models\Hide;



class HideController extends Controller {
    
    public function CreateHide(Request $request){
        
        if ($request->input(Hide::HIDE_PRODUCT) == "") {
            
            return $this->resultApi(array(),"false","deficient parameter user ".Hide::HIDE_PRODUCT);
            
        }
        
        if ($request->input(Hide::HIDE_STATUS) == "") {
            
            return $this->resultApi(array(),"false","deficient parameter user ".Hide::HIDE_STATUS);
            
        }
        $product = $request->input(Hide::HIDE_PRODUCT);
        $status = $request->input(Hide::HIDE_STATUS);
        
        
        if(count(DB::table(Hide::TABLE_HIDE)->where(Hide::HIDE_PRODUCT, "=" ,$product)->get()) > 0){
            
            return $this->resultApi(array(),"true","exits product");
        }else{
            DB::table(Hide::TABLE_HIDE)->insert(array(Hide::HIDE_STATUS => $status,Hide::HIDE_PRODUCT => $product));
            return $this->resultApi(array(),"true","successfuly");
        }
    }
    
    
    public function EditHide(Request $request){
        
        if ($request->input(Hide::HIDE_PRODUCT) == "") {
            
            return $this->resultApi(array(),"false","deficient parameter user ".Hide::HIDE_PRODUCT);
            
        }
        
        if ($request->input(Hide::HIDE_STATUS) == "") {
            
            return $this->resultApi(array(),"false","deficient parameter user ".Hide::HIDE_STATUS);
            
        }
        
        $product = $request->input(Hide::HIDE_PRODUCT);
        $status = $request->input(Hide::HIDE_STATUS);
        
        DB::table(Hide::TABLE_HIDE)->where(Hide::HIDE_PRODUCT,"=",$product)->update(array(Hide::HIDE_STATUS => $status));
        
        return $this->resultApi(array(),"true","successfuly");
    }
    
    public function DeleteHide(Request $request){
        
        if ($request->input(Hide::HIDE_PRODUCT) == "") {
            
            return $this->resultApi(array(),"false","deficient parameter user ".Hide::HIDE_PRODUCT);
            
        }
        
        $product = $request->input(Hide::HIDE_PRODUCT);
        
        
        DB::table(Hide::TABLE_HIDE)->where(Hide::HIDE_PRODUCT,"=",$product)->delete();
        
        return $this->resultApi(array(),"true","successfuly");
        
    }
    
    public function LoadHide(){
        
        $list = DB::table(Hide::TABLE_HIDE)->select()
									->get();
        
        return json_encode($list);
    }
    
    
}